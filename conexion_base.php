<?php
$host = 'localhost';
$db   = "dbclasepoo";
$user = 'root';
$pws   = '';

$mbd = new PDO('mysql:host='.$host.';
dbname='.$db, 
$user,
$pws);

?>
