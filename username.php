<?php

//NON SERVE DA ELIMINARE
//restituisce la lista di tutti gli usernami in JSON
include "libreria.php";
$db=connessioneDB();
$result=mysqli_query($db, "SELECT user FROM utente");
if($result==""){
    "Query non eseguita";
}
$users=array();
while($row= mysqli_fetch_assoc($result)){
    $users[] = $row;
}
mysqli_close($db);
echo json_encode($users);
?>