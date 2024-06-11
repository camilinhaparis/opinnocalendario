<?php
//arquivo de login
include "connect.php";

$login = $_POST["login"];
$senha = $_POST["senha"];

if($login && $senha){
    $sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
    
    while ($dados = mysqli_fetch_array ($sql)){
        $email = $dados['email'];
        $pass = $dados['senha'];
    }
//controlla che i dati corrispondano a quelli presenti nella tabella del database.
//inizio della verifica
    if($login == $email && $senha == $pass){
        //inizio sessione
        SESSION_START();
        //variabili sessione
        $_SESSION['login_user'] = $login;
        $_SESSION['senha_user'] = $senha; 
        header('location:user.php');
    }else{
        header('location:perfil.php');
       
    }
    //fine della verifica
}else{
    header('location:perfil.php');
}


?>