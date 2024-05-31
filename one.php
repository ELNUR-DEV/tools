<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>

<?php
$result = require __DIR__ . '/calc.php';
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <b>Результат вычислений:</b>
    <br>
    <?= $result ?>
?>

</ul>
</body>
</html>