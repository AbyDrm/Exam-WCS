<?php
// On va incluire ce script dans les autres pages du site pour qu'elles puissent accéder aux éléments nécessaire au fonctionnement du site.

// Connexion à la BDD
$pdo = new PDO(
    'mysql:host=localhost;dbname=wild_code_school;charset=utf8;port=3306',
    'root', 
    'root', 
    array( 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING 
    )
);

// Création ou bien accès à la session de l'internaute
session_start(); // On crée une session (fichier sur le serveur) correspondant à 1 internaute car liée à celui-ci par l'ID de la session. On y mettra des données qui le concerne. Ou alors on y accède si elle existe déjà.

// Déclaration de notre fonction debug : 
function debug($variable)
{
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
}