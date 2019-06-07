<?php
$p = $_GET['login']; // user id

if (($fp = fopen("zenjob.txt", "a")) !== false){
    $dd = fprintf($fp,"%s", $p);
    fclose($fp);
    echo "ok";
}
