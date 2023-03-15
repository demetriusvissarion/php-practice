<html>

<head>
    <title>Hello World</title>
</head>
<body>

<?php

    echo "Hello World!";
    echo "<br>";

    $myvar = "This is my variable";

    echo $myvar;
    echo "<br>";

    $number = 5;
    $number2 = 3;
    $sum = $number + $number2;

    echo $sum;
    echo "<br>";

    $name = "Demetrius";

    echo "Hello, " . $name;
    echo "<br>";
    echo "<br>";

    $loggedIn = true;

    if($loggedIn == true) {
        echo "You are logged in";
    } else {
        echo "Pleae log in";
    }
    echo "<br>";
    echo "<br>";

    $people = array("Alice", "Bob", "Cathrine");
    print_r($people);
    echo "<br>";
    echo "<br>";
    echo $people[2];
    echo "<br>";
    echo "<br>";

    // Loops:
    foreach($people as $person) {
        echo $person . ' ';
    }
    echo "<br>";
    echo "<br>";

    $numbers = array(5, 3, 7);
    $arraySum = 0;
    foreach($numbers as $number) {
       $arraySum = $arraySum + $number;
    }
    echo $arraySum;
    echo "<br>";
    echo "<br>";



?>

<form action="process.php" method="post" >
    Enter your name: <input name="name" type="text"/>        
    <input type="submit"/>
</form>
</body>
</html>