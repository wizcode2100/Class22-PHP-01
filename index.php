

<?php

echo '<a href="contact.php">Contact Us</a>';

echo '<h1>Hello World</h1>

    <p>This is p tag</p>
    <input type="text" name="" value="" placeholder="Enter your name">
    ';

echo "<br>";

$number1 = 40;
$name = "Rahman";
$number2 = 60;

$result = $number1 + $number2;

echo 'The result is='.$result;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-01</title>
</head>
<body>

    <h1>This is our first class on PHP</h1>
    <a href="contact.php">Contact Us</a>

    <?php

     echo 'Hello world form html body!';
    echo '<h3>This is heading tag from html body</h3>';

    $marks = [74, 67, 98, 90];

    // echo $marks[0].'<br>';
    // echo $marks[1].'<br>';
    // echo $marks[2].'<br>';
    // echo $marks[3].'<br>';

    for($i=0; $i<=3; $i++){ //0, 1, 2, 3, 4
    echo $marks[$i].'<br>';
    }
    
    ?>
</body>
</html>