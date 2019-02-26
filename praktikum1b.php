<?php
    function keliling_lingkaran($jari){
        return 2 * 3.14 * $jari;
    }
    
    $jari=15;
    echo "Keliling lingkaran dengan jari-jari $jari adalah " ;
    echo  keliling_lingkaran($jari);
?>