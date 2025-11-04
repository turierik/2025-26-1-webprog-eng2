<?php
    $errors = [];
    if ($_GET){
        $a = $_GET["a"];
        $b = $_GET["b"];

        // check that a and b are numbers
        // check that b is not 0

        if (filter_var($a, FILTER_VALIDATE_FLOAT) === false){
            $errors["a"] = "a must be a number!";
        }
        if (filter_var($a, FILTER_VALIDATE_FLOAT) === false){
            $errors["b"] = "b must be a number!";
        } else if ($b == 0){
            $errors["b"] = "b cannot be zero!";
        }

        if (count($errors) == 0)
            $x = $a / $b;
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
    <form action="task1.php" method="GET">
        a = <input type="text" name="a" value="<?= isset($a) ? $a : "" ?>">
        <?= $errors['a'] ?? "" ?>
        <br>
        b = <input type="text" name="b" value="<?= $b ?? "" ?>">
        <?= $errors['b'] ?? "" ?>
        <br>
        <button type="submit">Divide</button>
    </form>
    <?= $_GET && count($errors) == 0 ? $x : "" ?>
</body>
</html>