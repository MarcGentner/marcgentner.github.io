<?php

class Application {
    private $currentController = "Pages";
    private $currentMethod = "index";
    private $param = [];

    public function __construct() {

        $url = $this->getURL();

        // if ($url[0] === NULL && empty($url[0])) {
        //     echo "no controller found, show default controller";
        //     // if ($url[0] == []) {
        //         require_once (controllers . "Pages.php");
        // // }

        if(file_exists(controllers . ucwords($url[0]).'.php')) {
            $this->currentController = ucwords($url[0]);
            // print_r($this->currentController);
            unset($url[0]);
            
            require_once(controllers . $this->currentController . '.php');
            // require_once root . 'logic/controllers/'. $this->$currentController .".php";
            
            $this->currentController = new $this->currentController;
            
            if(isset($url[1])) {
                if(method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
            // get parameter list
            $this->params = array_values($url);
            // $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }


    // }
        // if(file_exists(root . 'logic/controllers/' . $currentController . '.php')) {
            //     // $this->currentController = ucwords($url[0]);
            //     // echo($this->currentController);
        //     // print_r($url);


        // }
        // if(file_exists(controllers . 'C' . ucwords($url[0]) . '.php')) {
        //     $this->currentController = ucwords($url[0]);

        //     unset($url[0]);

        //     require_once controllers . $this->currentController . '.php';
        //     $this->currentController = new $this->currentController;
        // }
    }

    public function getURL() {
        if(isset($_GET['url'] )) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
           
            return $url;
        } elseif (isset($_GET['url']) === NULL) {
            echo 'home page';
        } {

        }
    }
}