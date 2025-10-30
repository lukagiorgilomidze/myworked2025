<?php 
include('./userdata.php');
include('./funcions.php');

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
    
    echo '<div class="users">';
    foreach($users as $user){
    
    echo '<div>';
        if ($user['gender'] === 'man') {
            img('./gender/man.png', 'pic');
        }
        elseif ($user['gender'] === 'woman') {
            img('./gender/woman.png','pic');
        }
        else {
            img('./gender/hack.png','pic');
        };
        h1($user['name']);
        h2($user['lastname']);
        h3($user['age']);
    echo '</div>';
    
    };
    echo '</div>';
    ?>

?>


</body>
</html>