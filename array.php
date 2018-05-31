<?php
    $array  = [
       'Africa' => ['Elephantidae', 'Acinonyx jubatus', 'Panthera leo', 'Crocodilia', 'Giraffa camelopardalis', 'Hippopotamus amphibius', 'Anthropoidea'],
       'Australis' => ['Macropus giganteus', 'Sciurus vulgaris'],
       'Antarctica' => ['Aptenodytes forsteri'],
       'South America' => ['Allobates', 'Allobates conspicuus'],
       'Eurasia' => ['Lynx lynx', 'Capra aegagrus'],
       'North America' => ['Castor fiber']
    ];
    foreach ($array as $country => $value) {
        foreach ($value as $animal) {
            if (strpos($animal, ' ') !== false) {
                $arrayfinal[] = $animal;
                $arraycountry[$animal] = $country;
            }
        }
    }
    foreach ($arrayfinal as $kluch) {
       $string = implode(" ", $arrayfinal);
    }
    $newarray = explode(" ", $string);
    foreach ($newarray as $n => $k) {
        if ($n % 2 != 0)
           $a[] = $k;
        else
           $b[] = $k;
    }
    shuffle($a);
    foreach($b as $key=>$val) {
        $b[$key] .= $a[$key];
    }
    $final = array_combine($b,$arraycountry);
    foreach ($final as $d => $f) {
        echo "<h2>$f</h2>";
        echo $d;
    }
