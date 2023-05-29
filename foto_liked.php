<?php
     //PAGINA ACCESSIBILE SOLO DA LOGGATI
     session_start(); 
     include 'libreria.php';
     verifica_log();
     
    //RESTITUIAMO TUTTE gli id di tutte le foto a cui ha messo like l'utente 
    $db=connessioneDB();
    $result=mysqli_query($db, 'SELECT id_foto FROM mipiace WHERE id_utente="'.$_SESSION['ID'].'"');
    if($result==""){
        "Query non eseguita";
    }
    $like=array();
    while($row= mysqli_fetch_assoc($result)){
        $like[] = $row;
    }
    mysqli_close($db);
    echo json_encode($like);
    
?>