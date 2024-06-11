<?php
//file di collegamento database

$host = "127.0.0.1:3306"; 
$user = "root";
$pass = "";
$banco = "db_opinno"; //nome database


$link = mysqli_connect($host, $user, $pass, $banco);

?>

<!--La funzione mysqli_connect cerca di stabilire una connessione al server MySQL utilizzando i parametri forniti. 
Se la connessione ha successo, restituisce un identificatore di connessione (un riferimento alla connessione) 
che viene memorizzato nella variabile $link.-->