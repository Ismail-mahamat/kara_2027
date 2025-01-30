<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: *");
$db = new PDO("mysql:host=localhost;port=3306;dbname=ma_bd", "root", ""); // Correction de la chaîne de connexion

$resultat = $db->query("SELECT * FROM livre")->fetchAll(PDO::FETCH_ASSOC); // Ajout d'un espace autour de l'affectation
echo json_encode($resultat);
?>