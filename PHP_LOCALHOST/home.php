<?php
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    ini_set('display_errors', 1);
    error_reporting(E_ALL &~E_NOTICE);
    session_start();
    require("./cornice.php");
   
?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Home</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Fredericka the Great' rel='stylesheet'>
</head>

<body>
    <div class="body">
    <div class="header">
  	        <h2>Home</h2>
        </div>
        <p id="phome">BENVENUTO!!</p>
        <p id="phome">Questo è un sito web per la vendita di strumenti musicali, sviluppato come progetto per l'esame del prof. Nanni. Per ulteriori
        informazioni sul funzionamento del sito consultare la relazione di accompagnamento.</p>
        </div>
    </div>
</body>
</html>