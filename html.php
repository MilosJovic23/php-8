<?php




    $imena = ["Toma","Petar","Vlada"];






?>

<!doctype html>
<html lang="en">
    <head>
        <title>Vezba Php</title>
    </head>


    <body>

        <?php
        foreach ($imena as $ime ) {
            echo "<p>$ime</p>";
        }
        ?>

        <?php

            foreach ( $imena as $ime ) { ?>
                    <p> <?php echo $ime ?>   </p>
            <?php
            }
        ?>


        <?php foreach ( $imena as $ime ): ?>

        <?php endforeach; ?>



    </body>


</html>
