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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirmation = $_POST['password_confirmation'] ?? '';

    echo "<h3>მომხმარებელი: $name</h3>";

    if ($password === $password_confirmation) {
        echo "<p style='color: green;'>თქვენ წარმატებით დარეგისტრირდით</p>";
    } else {
        echo "<p style='color: red;'>პაროლი და მისი კონფირმაცია არასწორია</p>";
    }
}

ec

?>

<!-- ფორმა -->
<form method="post" action="">
    <label>მომხმარებელი:</label>
    <input type="text" name="name" required>

    <label>პაროლი:</label>
    <input type="password" name="password" required>

    <label>გაიმეორეთ პაროლი:</label>
    <input type="password" name="password_confirmation" required>

    <input type="submit" value="რეგისტრაცია">
</form>
h

</body>
</html>