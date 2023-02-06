<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
    <?php
    echo "<h1> WaseemJi's Porfolio </h1> ";
    echo "<p> This page contains informations and descriptions   </p> <hr/>";
    $education = array("HighSchool"=>"93.1%" , "Higher Secondary" => "80.1%" , "Btech" => "75%");
    $skills = array("python","django","mysql","git","postgres","HTML CSS JS Bootstrap");
    
    echo "<hr/> <h3> Education</h3>";
    foreach ($education as $school => $percent) {
        echo $school . ":" . $percent;
        echo "<br>";
    }

    echo "<hr/> <h3>My Skills </h3>";
    $arrlength = count($skills);
    for ($i=0 ; $i < $arrlength ; $i++){
        echo $skills[$i] . "<br/>";
    }
    // var_dump($skills);
    ?>
</body>
</html>