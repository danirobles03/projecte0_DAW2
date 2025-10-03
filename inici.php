<?php
session_start();

$json = file_get_contents('data.json');
$dades = json_decode($json, true);

shuffle($dades['preguntes']);
$_SESSION['preguntes'] = array_slice($dades['preguntes'], 0, 10);

$_SESSION['respostes'] = [];
$_SESSION['actual'] = 0;

header("Location: pregunta.php");
exit;
