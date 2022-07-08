<?php
 define("DB_SERVERNAME","localhost");
 define("DB_USERNAME","root");
 define("DB_PASSWORD","root");
 define("DB_NAME", "db_airport");


 $conn = new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
 
 if($conn && $conn->connect_error){
    echo "connessione fallita". $conn->connect_error;
    exit();
 }



 $sql = "CREATE TABLE flight(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    code_departure VARCHAR(10) NOT NULL  ,
    code_arrival VARCHAR(10) NOT NULL  ,
    price DECIMAL(5,2) NOT NULL 
 )";

 if($conn->query($sql) === true){
    echo "tabella creata";
 }else{
    echo "errore creazione tabella" . $conn->error;
 }



$conn->close();








 



?>