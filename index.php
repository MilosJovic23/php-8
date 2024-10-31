<?php








    $automobili = [
        "Audi" => "A4",
        "BMW" => "m5",
    ];

//    foreach ($automobili as $marka => $auto) {
//        echo $auto . "<br>";
//        echo $marka . "<br>";
//    }

    $osobe = [
        "Toma" => [
            "punoIme" => "Tomislav",
            "prezime" => "Nikolic",
            "godine" => 29
        ],
        "Nidza" => [
            "punoIme" => "Nikola",
            "prezime" => "Pavlovic",
            "godine" => 34
        ]

    ];


//    echo $osobe["Toma"]["punoIme"]."<br>";
//
//
//    foreach( $osobe as $ime => $osoba) {
//        echo $ime."<br>";
//        echo $osoba["godine"]."<br>";
//    }


//    $automobili = [
//        "Zastava" =>[
//            "model" => "Yugo 55",
//            "godiste" => 1995
//        ],
//        "Renault" =>[
//            "model" => "Megane RS",
//            "godiste" => 2014
//        ],
//        "Toyota" =>[
//            "model" => "Rav4",
//            "godiste" => 2021
//        ]
//    ];
//


//    $trenutnaGodina = date("Y");
//
//    foreach ( $automobili as $marka => $auto) {
//
//        $model = $auto["model"];
//        $godiste = $auto["godiste"];
//        $starostAuta = $trenutnaGodina - $godiste;
//
//        if ( $starostAuta <5 ){
//            echo $model."je nov auto";
//        }
//        else if ( $starostAuta >5 && $starostAuta <=10 ){
//            echo $model."je noviji auto";
//        }
//        else if ( $starostAuta >=10 && $starostAuta <20 ){
//            echo $model."je star auto";
//        } else {
//            echo $model."je oldtimer";
//        }
//    }



    $imena = ["Toma","Petar","Vlada"];

    foreach ( $imena as  &$ime ) {

        $ime = strtolower($ime);


    }
    var_dump($imena);


?>