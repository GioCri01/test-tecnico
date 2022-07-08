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


 $sql = "CREATE TABLE airport(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    airport_name VARCHAR(30) NOT NULL ,
    code VARCHAR(10) NOT NULL UNIQUE
 )";

 if($conn->query($sql) === true){
    echo "tabella creata";
 }else{
    echo "errore creazione tabella" . $conn->error;
 }



$conn->close();








 



?>