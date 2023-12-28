<?php

$db = new mysqli("localhost", "root","", "gmebd_erp_software_v1");

if(mysqli_connect_errno()) {
    echo "Connection Failed";
} else {
    echo "Connection Successful";
}


$sql = "INSERT INTO banks(bank_id, bank_name) VALUES(?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param('ss', $id, $name);
$id = "BNK-0909";
$name = "demo";
$stmt->execute();
$stmt->close();