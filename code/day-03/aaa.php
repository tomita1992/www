<?php 
    $q = fopen('music_data', 'r');
    $f = fgets($q);

    echo $f;
    fclose($q);
?>