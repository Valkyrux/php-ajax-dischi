<?php
include_once "db.php";
header('Content-Type: application/json');

if (empty($_GET['genre']) || $_GET["genre"] === "All") {
    echo json_encode($disks);
} else {
    $genre = $_GET['genre'];
    $genre_array = [];
    foreach ($disks["response"] as $disk) {
        if ($disk["genre"] === $genre) {
            array_push($genre_array, $disk);
        }
    }
    echo json_encode(["success" => true, "response" => $genre_array]);
}
