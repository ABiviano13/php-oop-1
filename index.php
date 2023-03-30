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

// var_dump($interstellar);

$inception = new Movie(
    'Inception',
    'Christopher Nolan',
    'Syncopy Films, Warner Bros., Legendary Pictures',
    'Azione',
    '148 min'
);

$inception->anno_di_uscita = '2010';

// var_dump($inception);

$the_imitation_game = new Movie(
    'The Imitation Game',
    'Morten Tyldum',
    'Black Bear Pictures, Bristol Automotive',
    'Biografico',
    '114 min'
);

$inception->anno_di_uscita = '2014';

// var_dump($the_imitation_game);


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
            <ul>
                <h1>
                    Lista di Film più famosi
                </h1>
                <li>
                    <?php echo $interstellar->getMovie(); ?>
                </li>
                <li>
                <?php echo $inception->getMovie(); ?>
                </li>
                <li>
                <?php echo $the_imitation_game->getMovie(); ?>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>