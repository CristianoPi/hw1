<?php
    //PAGINA ACCESSIBILE SOLO DA LOGGATI
    include 'libreria.php';
    $db=connessioneDB();

    $u=mysqli_real_escape_string($db, $_POST["user"]);

    $p=mysqli_real_escape_string($db, $_POST["pwd"]);


    session_start();
    $id=$_SESSION["ID"];

    $risultato= array(false);

     if(isset($u)&& isset($p)){
      
        $query = "SELECT user FROM utente
                    WHERE user = '$u'";
        $res = mysqli_query($db, $query) or die(mysqli_error($db));
        if(mysqli_num_rows($res) === 0){
            $query_p="SELECT pwd FROM utente WHERE id ='$id'";
            $res_p = mysqli_query($db, $query_p) or die(mysqli_error($db));
            $row = mysqli_fetch_array($res_p);
            
            if(password_verify($p, $row['pwd'])){
                //$pwd = md5($p);
                $query_u= "UPDATE utente 
                            SET user='$u'
                            WHERE
                            id ='$id'";
                $res = mysqli_query($db, $query_u) or die(mysqli_error($db));
                if(mysqli_affected_rows($db) > 0 ){
                    $risultato[0]=true;
                }
                else
                    $risultato[0]=false;
            }
        }
        else
            $risultato[0]=false;
     }
     echo json_encode($risultato);
?>
