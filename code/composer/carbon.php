<?php 

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

echo Carbon::now()->format('今天是Y年m月d日');