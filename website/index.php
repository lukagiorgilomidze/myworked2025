<?php 
include('./data.php');
include('./function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container background">
        <header>
            <img src="<?php echo $header['logo']; ?>" alt="My Website Logo">
            <h1><?php echo $header['title']; ?></h1>
        </header>
        <div class="textbox">
            <h2><?php echo $header['title1']; ?></h2>
           <div>
             <h1><?php echo $header['title2']; ?></h1>
            <p><?php echo $header['description1']; ?></p>
           </div>
           <div class="dash"></div>
        </div>
        </div>

        <div class="coffe-box ">
            <div class="coffe-box-content">
                <h2><?php echo $coffeBox['title']; ?></h2>
                <button><?php echo $coffeBox['button']; ?></button>
            </div>

                    <div class="cards container">
            <?php
                cardsData($cardsdatas); 
            ?>
        </div>

        </div>

    </main>
</body>
</html>