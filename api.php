<?php
header("Content_Type: application/json");

include 'config.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
    $stmt = $conn->prepare("SELECT * FROM canciones");
    $stmt->execute();
    $canciones = $stmt->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($canciones);
} else {
    echo json_encode(["mesage" => "Method not allowed"]);
}

?>