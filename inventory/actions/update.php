<?php
include("../config.php");
$id = $_POST['id'] ?? 0;
$name = $_POST['name'] ?? '';
$quantity = $_POST['quantity'] ?? 0;

$conn->query("UPDATE inventory SET name='$name', quantity=$quantity WHERE id=$id");
echo json_encode(["success" => true]);
?>