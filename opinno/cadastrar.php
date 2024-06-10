<?php
//database connection file
include "connect.php";

    $nome = mysqli_real_escape_string($link, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($link, $_POST['sobrenome']); //cognome
    $email = mysqli_real_escape_string($link, $_POST['email']);
	$senha = mysqli_real_escape_string($link, $_POST['senha']); //password
    $cadastrar = false;

    /*$_POST è una variabile globale che memorizza i dati inviati tramite il metodo HTTP POST. 
    Quando un modulo HTML viene inviato con il metodo POST, 
    i dati contenuti nei campi del modulo vengono inviati al server 
    e possono essere consultati in PHP tramite la variabile $_POST.*/


//verificare se è possibile registrarsi
if($nome != "" && $sobrenome != "" &&  $email !="" && $senha !="" ){
   $cadastrar = true;    
}else{
    echo "Non è possibile lasciare i campi vuoti<br>";
    echo "<a href='cadastre.php'>Voltar</a><br>";
}

//nome della variabile da inserire nel database
if($cadastrar){
    $sql = "INSERT into tb_user(nome, sobrenome, email, senha ) 
    VALUES  ('$nome','$sobrenome','$email','$senha')";

    mysqli_query($link,$sql); 
    //è utilizzato per registrare i dati del modulo nel database
    /*$link: È l'identificatore della connessione al database, restituito dalla funzione mysqli_connect.
    $query: È la stringa contenente la query SQL che si desidera eseguire.*/
    
    

    header("location:user.php");
    /*La riga di codice header("location:user.php"); in PHP viene utilizzata per 
    reindirizzare il browser del client a un'altra pagina, in questo caso "user.php".*/

}            

?>