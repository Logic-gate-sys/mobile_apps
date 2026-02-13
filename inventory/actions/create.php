<?php
include("../config.php");
$name = $_POST['name'] ?? '';
$quantity = $_POST['quantity'] ?? 0;

if ($name) {
    $conn->query("INSERT INTO inventory (name, quantity) VALUES ('$name', $quantity)");
    echo json_encode(["success" => true, "data" => ["id" => $conn->insert_id]]);
} else {
    echo json_encode(["success" => false, "error" => "missing data"]);
}
?>