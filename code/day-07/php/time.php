<?php 
    header('Content-Type: application/x-javascript');

    $json = json_encode(array(
        'time' => time()
    ));
    echo "foo({$json})";