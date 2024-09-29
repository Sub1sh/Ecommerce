<?php
$con=null;
try{
    $con=new PDO("mysql:host;dbname=swastik_ecommerce","root","mysql#touchware");
    echo "Database connection successfull.";
    catch(Exception Se){
        echo "There was an error while connecting to database:".Se->getMesssage(); 
    }
}