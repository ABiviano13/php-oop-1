<?php

require_once "./models/Movie.php";

$interstellar = new Movie(
    'Interstellar',
    'Christopher Nolan',
    'Legendary Pictures, Syncopy Films, Lynda Obst Productions',
    'Fantascienza',
    '169 min'
);

$interstellar->anno_di_uscita = '2014';

var_dump($interstellar);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <main>
        <div class="container">
            
        </div>
    </main>
</body>
</html>