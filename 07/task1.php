<?php
    $x = 5;
    echo $x;
    echo($x);
    print $x;
    print($x);

    $a = [1, 5, 6, 7];
    for($i = 0; $i < count($a); $i++)
        echo $a[$i];
    foreach($a as $element)
        echo $element;
    foreach($a as $index => $element)
        echo $index . "=" . $element . "<br>";

    // js objects --> php associative array
    $car = [
        "year" => 2023,
        "model" => "Tesla Model M",
        "broken" => false
    ];
    foreach($car as $index => $element)
        echo $index . "=" . $element . "<br>"; // false = empty string

    // echo $car; // don't do this, it gives a warning and writes "Array"

    // JS join --> PHP implode()
    echo implode(", ", $a);
    
    // JS split --> PHP explode()
    explode(" ", "hello world"); // ["hello", "world"]

    // string substitution
    echo 'x = $x';
    echo "x = $x"; // this will substitute 5 as $x
?>