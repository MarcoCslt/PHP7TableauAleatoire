<?php
    $nombre = array();
    for ($i=0; $i < 100; $i++) { 
        $nombre[$i] = rand(0,100);
    }
    for ($i=0; $i <= 100; $i++) { 
        $k=0;
        for ($j=0; $j < 100; $j++) { 
            
            if ($nombre[$j] == $i) {
                $k++;
            }
        }
        echo "La valeur ".$i." est présente ".$k." fois <br>";
    }
?>