<?php

$db = new mysqli("localhost", "root","", "gmebd_erp_software_v1");

if(mysqli_connect_errno()) {
    echo "Connection Failed";
} else {
    echo "Connection Successful";
}

// $sql = "Select * from accounts";
// $result = $db->query($sql);
// // var_dump($result);

// while($data = $result->fetch_object()) {
//     echo '<pre>';
//     echo $data->account_name;
// }

$sql = "UPDATE accounts SET account_name = 'Chart of Accounts' WHERE account_id='AH-0001'";
$db->query($sql);
