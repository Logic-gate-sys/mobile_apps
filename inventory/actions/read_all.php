<?php
include("../config.php");
$result = $conn->query("SELECT id, name, quantity FROM inventory");
$data = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode(["success" => true, "data" => $data]);
?>



