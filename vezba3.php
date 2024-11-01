

<?php



    $reci = ["Slovo","Asembley","PHP","Java","C","TypeScript"];

    foreach($reci as $rec){

        $duzinaReci = strlen($rec);

        if ($duzinaReci > 5){
           echo "Rec $rec ima preko 5 karaktera";
        }
    }

?>