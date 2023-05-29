<?php
     include 'libreria.php';
     
    //RESTITUIAMO TUTTE LE prime 6 foto caricate
    $db=connessioneDB();
    $result=mysqli_query($db, 'SELECT foto FROM foto LIMIT 6;');
    if($result==""){
        "Query non eseguita";
    }
    $foto=array();
    //prendo solo le primwe 6 foto perchè non volgio che chi non è loggato le possa vedere tutte, inoltre non do nessun dettaglio delle foto
    while($row= mysqli_fetch_assoc($result)){
        $foto[] = $row;
    }
    mysqli_close($db);
    echo json_encode($foto);
    
?>