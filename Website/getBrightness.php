<?php
include "Database.php";

function getBrightness(){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `settings`");
    $stmt->execute();

    $result = $stmt->fetch();
    return $result['brightness'];
}