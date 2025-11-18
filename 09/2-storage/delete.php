<?php
    include_once('Storage.php');
    $stor = new Storage(new JsonIo('data.json'));
    $id = $_GET['id'] ?? -1;
    $stor -> delete($id);
    header('location: index.php');
?>