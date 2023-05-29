<?php
            //connettiamoci al DB
            session_start();
            include 'libreria.php';
            $db=ConnessioneDB();
            if(!empty($_POST["user"]) && !empty($_POST["mail"])&& !empty($_POST["pwd"])&& !empty($_POST["pwd_v"])){
                $u=mysqli_real_escape_string($db, $_POST["user"]);
                if(mysqli_num_rows(mysqli_query($db,"SELECT ID, user FROM utente WHERE user='$u'"))>0)
                {
                    echo "ci hai provato ;)";
                    exit;
                }
                $m=mysqli_real_escape_string($db, $_POST["mail"]);
                if(mysqli_num_rows(mysqli_query($db,"SELECT ID, user FROM utente WHERE mail='$m'"))>0)
                {
                    echo "ci hai provato ;)";
                    exit;
                }
                //$p=md5(mysqli_real_escape_string($db, $_POST["pwd"])); //vulnerabile a brute force 
                $password=mysqli_real_escape_string($db, $_POST["pwd"]);
                $p=password_hash($password, PASSWORD_BCRYPT); 

                mysqli_query($db,"INSERT INTO utente VALUES ('','$u','$p','$salt','$m')") or die ("Impossibile eseguire la query");
                $resulta=mysqli_query($db, "SELECT ID, user FROM utente WHERE user='$u'");
                $rowa = mysqli_fetch_array($resulta);
                $_SESSION['ID']=$rowa['ID'];
                $_SESSION['user']=$rowa['user'];
            }
?>