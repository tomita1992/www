<?php

    $users = array(
      array(
          'id' => 1,
          'name' => '齐德龙',
          'age' => 20
      ),
      array(
          'id' => 2,
          'name' => '齐东强',
          'age' => 32
      ),
        array(
            'id' => 3,
            'name' => '海燕',
            'age' => 28
        )
    );

    $json = json_encode($users);
    echo $json;

