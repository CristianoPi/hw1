<?php
    require 'libreria.php';
    $db=connessioneDB();
     if (!isset($_GET["q"])) {
        echo "Non dovresti essere qui";
        exit;
    }
    $foto_id = mysqli_real_escape_string($db, $_GET["q"]);
    //PAGINA ACCESSIBILE SOLO DA LOGGATI
    session_start(); 
    verifica_log();

    $query = "SELECT user, descrizione 
    FROM utente RIGHT join commenti
    on commenti.id_utente=utente.id
    WHERE commenti.id_foto = '$foto_id';";

    $res = mysqli_query($db, $query) or die(mysqli_error($db));

    $commenti=array();
    while($row= mysqli_fetch_assoc($res)){
        $commenti[] = $row;
    }
    mysqli_close($db);
    echo json_encode($commenti);
?>