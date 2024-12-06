<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $one = $_POST['one'];

    $fd = fopen("text.txt", 'w');
    $str = "$one";
    fwrite($fd, $str);
    fclose($fd);

    echo "Привет, ${one}";
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
    <form action="" method="POST">
        <input type="text" name="one">
        <button>Отправить</button>
    </form>
</body>
</html>