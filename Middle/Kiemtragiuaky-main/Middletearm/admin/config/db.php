<?php
define('SITEURL','http://localhost/MiddleTearm');
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DB_NAME","dhtl");
define('PORT','3306');
$conn = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
if(!$conn){
    die("Cant connect to database".mysqli_connect_error());
}
?>