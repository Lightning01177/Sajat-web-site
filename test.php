<?php
header('Content-Type: application/json');

$url = "http://play.sunlightrp.hu:30120/dynamic.json";

$data = file_get_contents($url);

if ($data === false) {
    echo json_encode([
        "clients" => 0,
        "sv_maxclients" => 0
    ]);
    exit;
}

echo $data;
?>