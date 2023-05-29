<?php
     //PAGINA ACCESSIBILE SOLO DA LOGGATI
     session_start(); 
     include 'libreria.php';
     verifica_log();
     
    //RESTITUIAMO la foto con più like
    $db=connessioneDB();
    $result=mysqli_query($db, 'SELECT foto.foto, utente.user, COUNT(mipiace.id_foto) AS conteggio_mipiace FROM foto JOIN mipiace ON foto.ID = mipiace.id_foto JOIN utente ON utente.id= foto.utente GROUP BY foto.id ORDER BY conteggio_mipiace DESC LIMIT 1;');
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