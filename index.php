<?php
$title="Non sarebbe stato più facile continuare con vue.js? 'e grazie al php'";
$censured=$_GET['censured'];
$censure_placed_string= str_replace($censured,'***', $title);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Per censurare una parola usare : "?censured=(parola da censurare)" nella barra url <br> P.S. $liberaScelta = 'libera interpretazione'</p>
    <h1><?php echo $title?></h1>
    <p><?php echo strlen($title)?></p>

    <h2><?php echo $censure_placed_string?></h2>
    <p><?php echo strlen($censure_placed_string)?></p>

</body>
</html>