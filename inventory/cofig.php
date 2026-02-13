<?php
$host = "localhost";
$user = "daniel.kpatamia"; // Change this
$pass = "dan443325"; // Change this
$db   = "mobileapps_2026B_daniel_kpatamia";  // Change this

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "Connection failed"]));
}

header('Content-Type: application/json');
?>