<?php
    //PAGINA ACCESSIBILE SOLO DA LOGGATI
    include 'libreria.php';
    $db=connessioneDB();
    $o=mysqli_real_escape_string($db, $_POST["pwd_old"]);
    $p=mysqli_real_escape_string($db, $_POST["pwd"]);
    $p_v=mysqli_real_escape_string($db, $_POST["pwd_v"]);


    session_start();
    $id=$_SESSION["ID"];

    $risultato= array(false);

     if(isset($o)&& isset($p)&& isset($p_v)){
      
        $query = "SELECT * FROM utente
                    WHERE id='$id'";
        $res = mysqli_query($db, $query) or die(mysqli_error($db));
        if(mysqli_num_rows($res) > 0 ){
            $query_p="SELECT pwd FROM utente WHERE id ='$id'";
            $res_p = mysqli_query($db, $query_p) or die(mysqli_error($db));
            $row = mysqli_fetch_array($res_p);
            if(password_verify($o, $row['pwd'])){
                if($p_v===$p){
                    $p=password_hash($p, PASSWORD_BCRYPT); 
                    $p_v=password_hash($p_v, PASSWORD_BCRYPT); 
                    $query_u= "UPDATE utente 
                            SET pwd='$p'
                            WHERE
                            id ='$id'";
                    $res = mysqli_query($db, $query_u) or die(mysqli_error($db));
                    $risultato[0]=true;
                }
                else {
                    $risultato[0]=false;
                }
            }
        }
        else
            $risultato[0]=false;
     }
     echo json_encode($risultato);
     
?>
