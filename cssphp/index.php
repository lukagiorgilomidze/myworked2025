<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
<?php
$names = [
    'luka','romani','beatri',
];

$class = '';

$imgs = [
    'img/1.jpeg',
    'img/2.jpeg',
    'img/3.jpg',
    'img/p.png'
];


echo '<div class="'. $class = 'box' . '">';
  for ($i = 0; $i < count($names); $i++) {
    echo '<img src="' . $imgs[$i] . '" class="img">';
    echo '<h1>' . $names[$i] . '</h1>';
}
echo '</div>';
?>


    </body>
    </html>