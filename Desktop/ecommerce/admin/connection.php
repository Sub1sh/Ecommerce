<?php

$con = null;

try{

    $con = new PDO("mysql:host=localhost;dbname=swastik_ecommerce","root","mysql#touchware");

    echo "Database connection successful.";

}

catch(Exception $e){

    echo "There was an error while connecting to database: ".$e->getMessage();

}

?>