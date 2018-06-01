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
                    $string = implode(" ", $arrayfinal);
                }
        }
    }
    $newarray = explode(" ", $string);
    $a=array();
    $b=array();
    foreach ($newarray as $n => $k) {
        if ($n % 2 == 0)
            $b[] = $k;
        else
            $a[] = $k;
    }
    shuffle($a);
    foreach($b as $key=>$val) {
        $b[$key] .= $a[$key];
    }
    $final = array_combine($b,$arraycountry);
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


