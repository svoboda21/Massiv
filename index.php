<?php
    $array  = [
        'Africa' => ['Elephantidae', 'Acinonyx jubatus', 'Panthera leo', 'Crocodilia', 'Giraffa camelopardalis', 'Hippopotamus amphibius', 'Anthropoidea'],
        'Australis' => ['Macropus giganteus', 'Sciurus vulgaris'],
        'Antarctica' => ['Aptenodytes forsteri'],
        'South America' => ['Allobates', 'Allobates conspicuus'],
        'Eurasia' => ['Lynx lynx', 'Capra aegagrus'],
        'North America' => ['Castor fiber']
    ];
    $arrayfinal=array();
    $arraycountry=array();
    foreach ($array as $country => $value) {
        foreach ($value as $animal) {
            $strworld = str_word_count($animal);
            if ($strworld/2 == 1) {
                $arrayfinal[] = $animal;
                $arraycountry[$animal] = $country;
            }
        }
    }
    $a=array();
    $b=array();
    $newarray=array();
    foreach ($arrayfinal as $p =>$q){
        $newarray[$p] = explode(" ", $arrayfinal[$p]);
         }
    foreach ($newarray as $q) {
        foreach ($q as $kk=>$qqq){
            if($kk==0) {
                $b[] = $qqq;
            } else {
                $a[] = $qqq;
            }
        }
    }
    shuffle($a);
    foreach($b as $key=>$val) {
        $b[$key] .= $a[$key];
    }
    $final = array_combine($b,$arraycountry);
    $j=0;
    foreach ($final as $d => $f) {
        if ($f!==$j) {
            echo "<h2>$f</h2>";
            echo $d;
        }
        else {
            echo ", ".$d ;
        }
        $j = $f;
    }
