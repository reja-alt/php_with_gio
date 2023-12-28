<?php

$dsn = "mysql:dbname=gmebd_erp_software_v1;host=localhost;";
$user = "root";
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "connected";
} catch(PDOException $e) {
   echo 'connection failed' . $e->getMessage();
}

$sql = "SELECT * FROM accounts";
$result = $pdo->query($sql);

foreach($result as $value) {
    echo $value['account_id'] . '<br>';
}

