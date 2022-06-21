<?php
// TODO !! REMPLACEZ 'theAnswerIs42' PAR VOTRE MOT DE PASSE PHPMYADMIN (il peut être vide : '')
try{
    $pdo = new PDO('mysql:dbname=hackathon;host=localhost', 'root', 'theAnswerIs42');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch(PDOException $e){
    echo $e->getMessage();
}