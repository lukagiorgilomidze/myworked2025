<?php 
include('./funct.php');
include('./data.php');
include('./comp.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    
    echo '<div class="main">';
    
    headerBox($generals);

    echo '<div class="downbox">';

    echo '<div class="box1">';    
contcs($contacts);
skills($skills);
schol($schools);
    echo '</div>';
    echo '<div class="box2">';
bio($infos);
experiences($experiences);
    echo '</div>';
    echo '</div>';
    echo '</div>';
footerSet($socials);
    echo '</div>';

    ?>
    
</body>
</html>