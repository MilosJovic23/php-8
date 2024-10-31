<?php






    $brojevi = [2,4,3,5];




    foreach ($brojevi as &$broj ) {

        $broj = pow($broj, 2);


    }



    var_dump($brojevi);





?>