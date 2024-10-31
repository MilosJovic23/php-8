<?php



    $siteTitle = "Postani Programer";
    $currentYear = date("Y");
    $footerTitle = "Copyright @ mojsajt ";


    $navItems = [
        [
            "name" => "Glavna",
            "url" => "/home.php"
        ],
        [
            "name" => "O nama",
            "url" => "/About.php"
        ],
        [
            "name" => "Kontakt",
            "url" => "/Contact.php"
        ]
    ];


?>

<!doctype html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $siteTitle ?></title>
    </head>

    <body>

        <h1><?php echo $siteTitle ?></h1>
        <nav>
            <ul>
               <?php foreach( $navItems as $key => $navItem ): ?>
                   <a href=<?= $navItem["url"] ?> > <?= $navItem["name"] ?> </a>
                <?php endforeach; ?>
            </ul>
        </nav>

        <footer>
            <p><?php echo $footerTitle.$currentYear ?></p>
        </footer>
    </body>

</html>
