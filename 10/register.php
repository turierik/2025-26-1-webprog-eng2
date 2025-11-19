<?php
    $errors = [];
    if ($_POST){
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        
        include_once('Storage.php');
        $stor = new Storage(new JsonIO('users.json'));

        if (trim($username) === ''){
            $errors['username'] = 'Username cannot be empty';
        } else {
            $user = $stor -> findOne(['username' => trim($username)]);
            if ($user !== NULL)
                $errors['username'] = 'Username is taken!';
        }

        if (trim($password1) === '')
            $errors['password1'] = 'Password cannot be empty!';

        if ($password1 !== $password2)
            $errors['password2'] = 'Password must match!';

        if (count($errors) === 0){
            $stor -> add([
                'username' => trim($username),
                'password' => password_hash($password1, PASSWORD_DEFAULT)
            ]);
            header('location: login.php');
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
    <form action="register.php" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password1"><br>
        Confirm password: <input type="password" name="password2"><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>