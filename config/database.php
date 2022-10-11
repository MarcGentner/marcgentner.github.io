<?php


class Database {
    // // Server \\
    // private $host = 'db.marcgentner.nl';
    // private $user = 'md466681db496694';
    // private $password = 'Kameleon8!123';
    // private $database = 'md466681db496694';
    //  dev env \\
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'portfolio';
    
    private $dbh;
    private $statement;
    private $error;


    public function __construct() {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
            echo 'connection established';
        } catch (PDOException $e ){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }


    // prepaired statement 
    public function query($sql) {
        $this->statement = $this->dbh->prepare($sql);
    }

   public function bind($param, $value, $type = null) {
        if(is_null($value)){
            switch (true) {

                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
    
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->statement->bindValue($param, $value, $type);
   }

   public function execute() {
    return $this->statement->execute();
   }

    public function resultSet() {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }


    public function single() {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }


    public function rowCount() {
        return $this->statement->rowCount();
    }
}

?>