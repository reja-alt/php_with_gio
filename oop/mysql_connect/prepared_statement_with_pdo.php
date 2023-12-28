<?php

$dsn = "mysql:dbname=gmebd_erp_software_v1;host=localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "CONNECTED";
} catch(PDOException $e) {
    echo "connection failed" . $e->getMessage();
}

// $sql = "INSERT INTO banks(bank_id, bank_name) VALUES(:id, :name)";
$sql = "INSERT INTO banks(bank_id, bank_name) VALUES(?, ?)";
$stmt = $pdo->prepare($sql);

$id = "bnk85984";
$name = "fjdkjf";
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt->execute();