<?php

// 1.) Write Hello World with increasing font size
// from 8px to 20px

for ($size = 8; $size <= 20; $size++)
    echo "<p style='font-size: {$size}px'>Hello World</p>";

// 2.) Write a word in the document where every
// 2nd letter has a diffent colour

$word = "computerscience";
for ($i = 0; $i < strlen($word); $i++){
    $c = $i % 2 == 0 ? 'blue' : 'red';
    echo "<span style='color: $c'>{$word[$i]}</span>";
}
   
?>