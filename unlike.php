<?php
            //connettiamoci al DB
            include 'libreria.php';
            if (!isset($_GET["q"])) {
                echo "Non dovresti essere qui";
                exit;
            }
            $db=ConnessioneDB();
            session_start();
            verifica_log();
            $foto_id=$_GET["q"];
            $utente_id=$_SESSION['ID'];
            mysqli_query($db,"DELETE  FROM mipiace WHERE id_foto=' $foto_id' and id_utente='$utente_id' ") or die ("Impossibile eseguire la query");
?>