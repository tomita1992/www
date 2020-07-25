<?php 

namespace App\Models;

class TestModel
{
    private $text = 'hello, world';
    public function get_hello()
    {
        return $this->text;
    }
}