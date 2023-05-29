<?php
            //connettiamoci al DB
            include 'libreria.php';
            $db=ConnessioneDB();
            $c=mysqli_real_escape_string($db, $_POST["comment"]);
            $foto_id=mysqli_real_escape_string($db, $_POST["fotoID"]);
            session_start();
            verifica_log();
            $utente_id=$_SESSION['ID'];
            if(isset($c) && isset($foto_id)){
                mysqli_query($db,"INSERT INTO commenti VALUES ('','$foto_id','$utente_id','','$c')") or die ("Impossibile eseguire la query");
            }
?>