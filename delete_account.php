<?php

    //PAGINA ACCESSIBILE SOLO DA LOGGATI
    session_start(); 
    include 'libreria.php';
    verifica_log();
    $db=connessioneDB();
    $id=$_SESSION["ID"];
    $result=mysqli_query($db, "DELETE FROM utente WHERE id='$id';");
    if($result==""){
        "Query non eseguita";
        exit;
    }
    session_destroy();  
    header('Location: index.php');
?>