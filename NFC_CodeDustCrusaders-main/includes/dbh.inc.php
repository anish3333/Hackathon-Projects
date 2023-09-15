<?php

$host = 'localhost';
$dbname = 'betterayurveda';
$dbusername = 'root';
$dbpwd = '';

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    
    $pdo = new PDO($dsn, $dbusername, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("MOSHIMOSH Connection Failed: " . $e->getMessage());
    
}