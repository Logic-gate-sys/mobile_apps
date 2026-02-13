<?php
include("../config.php");
$id = $_POST['id'] ?? 0;
$conn->query("DELETE FROM inventory WHERE id=$id");
echo json_encode(["success" => true]);
?>