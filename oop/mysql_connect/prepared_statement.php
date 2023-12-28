<?php

$db = new mysqli("localhost", "root","", "gmebd_erp_software_v1");

if(mysqli_connect_errno()) {
    echo "Connection Failed";
} else {
    echo "Connection Successful";
}

$sql = "SELECT account_name, ac_parent FROM accounts";
$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($account_name, $ac_parent);

while($stmt->fetch()) {
    echo "$account_name" . "<br>";
}