print "content-type: text/html\n\n";
import cgi

form = cgi.Fieldstorage()
username = form.getvalue("first-name")

print username