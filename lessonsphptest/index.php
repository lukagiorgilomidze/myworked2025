<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

// 1. Number Sequence Display
$numbers = range(1, 10);
$space = true;
foreach( $numbers as $nums){
    if ($space) {
        echo  $nums;
        echo $space = false ;
    }
    else{
       echo  '-'. $nums;
    };
};

echo '<br>';

// 2. Sum Integers 0 to 30

$numbers1 = range(0, 30);
$sum = 0;

foreach($numbers1 as $num1){
        $num1+=$sum;
};
echo "The sum of integers from 0 to 30 is: $sum";
echo '<br>';

//3. Construct Incremental Star Pattern



$lines = range(1, 5); 

foreach ($lines as $line) {
    $stars = ''; 
    foreach (range(1, $line) as $i) {
        $stars .= '* ';
    }

    echo $stars . "<br>";
}


echo '<br>';

// 4. Construct Symmetric Star Pattern

$lines = array_merge(range(1, 5), range(5, 1));

foreach ($lines as $line) {
    $stars = '';

    foreach (range(1, $line) as $i) {
        $stars .= '* ';
    }

    echo $stars . "<br>";
}

echo '<br>';

//5. Factorial Calculation
$number = 4; 
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number is: $factorial";
echo '<br>';

//6. Two-Digit Decimal Combinations
$numbers = range(0, 99); 
$last = end($numbers);   

foreach ($numbers as $num) {
    echo sprintf("%02d", $num); 

    if ($num !== $last) {
        echo ", ";
    }
};
echo '<br>';


//7. Count "r" Characters in a String
$text = "w3resource";
$count = 0;

foreach (str_split($text) as $char) {
    if ($char === 'r') {
        $count++;
    }
}

echo "Number of 'r' characters: $count";
echo '<br>';

//8. Create Multiplication Table with For Loops
echo '<table border="1" cellpadding="3px" cellspacing="0px">';

for ($row = 1; $row <= 6; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 5; $col++) {
        $result = $row * $col;
        echo "<td>{$row} * {$col} = {$result}</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo '<br>';

// 9. Chess Board Using Nested For Loops
echo '<table width="270px" cellspacing="0" cellpadding="0" border="1">';

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0) {
            $color = '#ffffff';
        } else {
            $color = '#000000';
        }

        echo "<td style='width:30px; height:30px; background-color:$color;'></td>";
    }
    echo "</tr>";
}

echo "</table>";
echo '<br>';

// 10. Multiplication Table 10x10
echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        $result = $row * $col;
        echo "<td>$result</td>";
    }
    echo "</tr>";
}

echo "</table>";


echo '<br>';
// 11. FizzBuzz Implementation

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $i . "<br>";
    }
}

echo '<br>';
// 12. Floyd Triangle Generation

function floydTriangle($n) {
    $number = 1;

    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}

echo "<h3>Floyd's Triangle (n = 5)</h3>";
floydTriangle(5);

echo "<h3>Floyd's Triangle (n = 11)</h3>";
floydTriangle(11);
echo '<br>';

function printA() {
    for ($row = 0; $row <= 7; $row++) {
        for ($column = 0; $column <= 7; $column++) {
            if ((($column == 1 || $column == 5) && $row != 0) || (($row == 0 || $row == 3) && ($column > 1 && $column < 5)))
                echo "*";
            else  
                echo " ";
        }
        echo "\n";
    }
}


function printB() {
    for ($row = 0; $row <= 6; $row++) {
        for ($col = 0; $col <= 6; $col++) {
            if ($col == 1 || 
                ($row == 0 && $col < 5) || 
                ($row == 3 && $col < 5) || 
                ($row == 6 && $col < 5) || 
                ($col == 5 && ($row != 0 && $row != 3 && $row != 6)))
                echo "*";
            else
                echo " ";
        }
        echo "\n";
    }
}

function printC() {
    for ($row = 0; $row <= 6; $row++) {
        for ($col = 0; $col <= 6; $col++) {
            if (($col == 1 && $row != 0 && $row != 6) ||
                (($row == 0 || $row == 6) && $col > 1 && $col < 6))
                echo "*";
            else
                echo " ";
        }
        echo "\n";
    }
}


echo "<pre>";
printA();
echo "</pre>";



echo "<pre>";
printB();
echo "</pre>";



echo "<pre>";
printC();
echo "</pre>";




?>





</body>
</html>