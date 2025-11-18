<?php
    include_once('Storage.php');
    $stor = new Storage(new JsonIo('data.json'));
    $id = $_GET['id'] ?? -1;
    $d = $stor -> findById($id);
    if (!$d){ // check if ID exists
        header('location: index.php');
        exit();
    }
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