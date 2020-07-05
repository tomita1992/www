<?php 

    function myfunc($num)
    {
        if($num == 1)
        {
            $num = 100;
        }
        else
        {
            $num = 1000;
        }

        return $num;
    }

    $i = 1;

    $num = myfunc($i);

    echo $num;
?>