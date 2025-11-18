<?php
    $data = json_decode(file_get_contents('data.json'), true);
    $id = $_GET['id'];
    if (!isset($data[$id])){ // check if ID exists
        header('location: index.php');
        exit();
    }
    $d = $data[$id];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $d["email"] ?></h1>
    <?= $d["two_words"] ?><br>
    <?= $d["seven"] ?><br>
    <?= $d["negint"] ?><br>
    <?= $d["tickme"] ? "true" : "false" ?><br>
    <?= $d["color"] ?><br>
    <?= $d["card"] ?><br>
    <br>
    <a href="edit.php?id=<?= $id ?>">Edit</a>
    <a href="delete.php?id=<?= $id ?>">Delete</a>
    <br>
    <a href="index.php">Back to index</a>
</body>
</html>