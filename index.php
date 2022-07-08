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



 $sql = "INSERT INTO flight(code_departure,code_arrival,price) VALUES
 ('BA12345','AO12345',30.00),
 ('BA12345','AO12345',50.00),
 ('BA12345','AO12345',250.00),
 ('BA12345','AO12345',450.00),
 ('AO12345','BA12345',50.00),
 ('AO12345','BA12345',250.00),
 ('AO12345','BA12345',150.00),
 ('AO12345','BA12345',350.00),
 ('CO12345','DR12345',50.00),
 ('CO12345','DR12345',200.00),
 ('CO12345','DR12345',150.00),
 ('CO12345','DR12345',80.00)";
 

 if($conn->query($sql) === true){
    echo "inseriemnto records avvenuto";
 }else{
    echo "errore inserimento" . $conn->error;
 }



$conn->close();








 



?>