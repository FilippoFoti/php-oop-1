<?php

include "db.php";

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>

    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <main>
        <h1>Coming Soon</h1>
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col">
                        <img src="<?php echo $movie->poster ?>" alt="">
                        <div class="details">
                            <h2><?php echo $movie->title; ?></h2>
                            <h3>Genere: <span><?php echo $movie->getDetails(); ?></span></h3>
                            <h3>Durata: <span><?php echo $movie->duration; ?></span></h3>
                            <h3>Paese: <span><?php echo $movie->country; ?></span></h3>
                            <h3>Anno: <span><?php echo $movie->year; ?></span></h3>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>