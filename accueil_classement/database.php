<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'escape_game_g4';// verifier ici le nom de la base de donnée
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');
?>