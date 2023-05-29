<?php
     //PAGINA ACCESSIBILE SOLO DA LOGGATI
     session_start(); 
     include 'libreria.php';
     verifica_log();
     
    //RESTITUIAMO TUTTE LE FOTO DELL'UTENTE 
    $db=connessioneDB();
    $result=mysqli_query($db, 'SELECT * FROM foto WHERE utente="'.$_SESSION['ID'].'"');
    if($result==""){
        "Query non eseguita";
    }
    $foto=array();
    while($row= mysqli_fetch_assoc($result)){
        $foto[] = $row;
    }
    mysqli_close($db);
    echo json_encode($foto);
    
?>