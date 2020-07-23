<?php 
    
    setcookie('key', '1', time() + 1 * 60 * 60 * 24);
    
    header('location: index.php');