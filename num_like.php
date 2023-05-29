<?php
     //PAGINA ACCESSIBILE SOLO DA LOGGATI
     session_start(); 
     include 'libreria.php';
     verifica_log();
     
    //RESTITUIAMO l'id della foto con il corrispottivo numero di like 
    $db=connessioneDB();
    $result=mysqli_query($db, 'SELECT id_foto, COUNT(*) as num FROM mipiace GROUP BY id_foto;');
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