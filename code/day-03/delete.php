<?php 
    function delete($delete_row)
    {
        $delete_file = file('./assets/data/music_data.txt');
        unset($delete_file[$delete_row]);
        file_put_contents( './assets/data/music_data.txt', $delete_file);
    }
?>