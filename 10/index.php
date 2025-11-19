<?php
    session_start();
    if (!isset($_SESSION['user_id'])){
        header('location: login.php');
        exit();
    }
    include_once('Storage.php');
    $stor = new Storage(new JsonIO('users.json'));
    $user = $stor -> findById($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, <?= $user['username'] ?>!</h1>
    <a href="logout.php">Log out</a>
</body>
</html>