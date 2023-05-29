<?php
     //PAGINA ACCESSIBILE SOLO DA LOGGATI
     session_start(); 
     include 'libreria.php';
     verifica_log();
     if(!empty($_GET['id'])){
        $db=connessioneDB();
        $id_foto=mysqli_real_escape_string($db,$_GET['id']);
        $id_utente=$_SESSION['ID'];
        $query="DELETE FROM foto WHERE utente='$id_utente' and ID='$id_foto'";
        $result=mysqli_query($db, $query);
        if($result==""){
            "Query non eseguita";
        }
     }
?>