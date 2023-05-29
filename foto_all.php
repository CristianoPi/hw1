<?php
     //PAGINA ACCESSIBILE SOLO DA LOGGATI
     session_start(); 
     include 'libreria.php';
     verifica_log();
     
    //RESTITUIAMO TUTTE LE FOTO CON TUTTI I LORO DETTAGLI
    $db=connessioneDB();
    $result=mysqli_query($db, 'SELECT utente.user, foto.* FROM foto LEFt JOIN utente on utente.id=foto.utente;');
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