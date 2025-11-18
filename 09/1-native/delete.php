<?php
    $data = json_decode(file_get_contents('data.json'), true);
    $id = $_GET['id'];
    if (!isset($data[$id])){ // check if ID exists
        header('location: index.php');
        exit();
    }
    unset($data[$id]);
    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
    header('location: index.php');
?>