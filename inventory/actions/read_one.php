<?php
include("../config.php");
$id = $_GET['id'] ?? 0;
$result = $conn->query("SELECT id, name, quantity FROM inventory WHERE id = $id");
$item = $result->fetch_assoc();

if ($item) {
    echo json_encode(["success" => true, "data" => $item]);
} else {
    echo json_encode(["success" => false, "error" => "not found"]);
}
?>