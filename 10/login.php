<?php
    session_start();
    $errors = [];

    if ($_POST){
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'];

        include_once('Storage.php');
        $stor = new Storage(new JsonIO('users.json'));
        $user = $stor -> findOne(['username' => $username]);

        if ($user === NULL)
            $errors['username'] = 'Username not found!';
        else if (!password_verify($password, $user['password'])){
            $errors['password'] = 'Wrong password!';
        }

        if (count($errors) === 0){
            $_SESSION['user_id'] = $user['id'];
            header('location: index.php');
            exit();
        }
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
    <form action="login.php" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>