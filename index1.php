<?php

// 2
$mas = [];
for($i = 0; $i < 10; $i++){
    $mas[$i] = rand(1, 50);
}
rsort($mas);
print_r($mas);

// 3
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $one = $_POST['one'];

    $fd = fopen("text.txt", 'w');
    $str = "$one";
    fwrite($fd, $str);
    fclose($fd);

    echo "Привет, ${one}";
}