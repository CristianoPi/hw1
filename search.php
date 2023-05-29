<?php
 if(!empty($_POST["search"])){
    $ch=curl_init();
    $url="https://pixabay.com/api/?key=35639613-13f0d441c1f3a6eed2bda39be&q=".$_POST["search"];
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    echo curl_exec($ch);
    curl_close($ch);
 }
?>