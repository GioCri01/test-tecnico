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



 $sql = "INSERT INTO airport(airport_name,code) VALUES
 ('Aereoporto di Milano Linate','AO12345'),
 ('Aereoporto di Roma','BA12345'),
 ('Aereoporto di Napoli','CO12345'),
 ('Aereoporto di Bari','DR12345'),
 ('Aereoporto di Genoa','SF12345'),
 ('Aereoporto di Torino','PP12345'),
 ('Aereoporto di Bergamo','NM12345')";

 if($conn->query($sql) === true){
    echo "inseriemnto records avvenuto";
 }else{
    echo "errore inserimento" . $conn->error;
 }



$conn->close();








 



?>