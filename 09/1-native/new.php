<?php
    $errors = [];
    
    if ($_POST){
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "Must be a valid email!";
        }

        $two_words = trim($_POST["two_words"]);
        if (count(explode(" ", $two_words)) < 2){
            $errors["two_words"] = "Must have at least two words!";
        }

        $seven = trim($_POST["seven"]);
        if (strlen($seven) != 7){
            $errors["seven"] = "Must be exactly 7 chars!";
        }

        $negint = $_POST["negint"];
        if (filter_var($negint, FILTER_VALIDATE_INT) === false){
            $errors["negint"] = "Must be an integer!";
        } else if ($negint >= 0){
            $errors["negint"] = "Must be negative!";
        }

        $tickme = $_POST["tickme"] ?? false;
        if ($tickme != "on"){
            $errors["tickme"] = "Must be checked!";
        }

        $color = trim($_POST["color"]);
        if (!in_array($color, ["red", "green", "blue"])){
            $errors["color"] = "Invalid color!";
        }

        $card = trim($_POST["card"]);
        if (!preg_match('/^\d{4}-\d{4}-\d{4}-\d{4}$/', $card)) {
            $errors["card"] = "Invalid card number!";
        }

        if (count($errors) == 0){
            $data = json_decode(file_get_contents('data.json'), true);
            $data[] = [
                "email" => $email,
                "two_words" => $two_words,
                "seven" => $seven,
                "negint" => intval($negint),
                "tickme" => $tickme == "on",
                "color" => $color,
                "card" => $card
            ];
            file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
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
    <form action="new.php" method="POST">
        E-mail: <input type="text" name="email" value="<?= $email ?? "" ?>">
        <?= $errors["email"] ?? "" ?>
        <br>

        At least two words: <input type="text" name="two_words" value="<?= $two_words ?? "" ?>">
        <?= $errors["two_words"] ?? "" ?>
        <br>

        Exactly 7 chars: <input type="text" name="seven" value="<?= $seven ?? "" ?>">
        <?= $errors["seven"] ?? "" ?>
        <br>

        Negative integer: <input type="text" name="negint" value="<?= $negint ?? "" ?>">
        <?= $errors["negint"] ?? "" ?>
        <br>

        <input type="checkbox" name="tickme" <?= ($tickme ?? false) == "on" ? "checked" : "" ?>> Must be checked
        <?= $errors["tickme"] ?? "" ?>
        <br>

        Favorite color: <select name="color">
            <option value="red" <?= ($color ?? false) == "red" ? "selected" : "" ?>>Red</option>
            <option value="green" <?= ($color ?? false) == "green" ? "selected" : "" ?>>Green</option>
            <option value="blue" <?= ($color ?? false) == "blue" ? "selected" : "" ?>>Blue</option>
            <option value="other" <?= ($color ?? false) == "other" ? "selected" : "" ?>>Other (not accepted)</option>
        </select>
        <?= $errors["color"] ?? "" ?>
        <br>
        
        Credit card number (XXXX-XXXX-XXXX-XXXX): <input type="text" name="card" value="<?= $card ?? "" ?>">
        <?= $errors["card"] ?? "" ?>
        <br>

        <button type="submit">Okay</button>
    </form>
    <?php if ($_POST && count($errors) == 0): ?>
        <span style="font-size: 1.5em; color: green">Your input is valid.</span>
    <?php endif; ?>
</body>
</html>