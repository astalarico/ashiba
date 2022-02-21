<?php

namespace Ashiba\Controllers;

class Controller
{

    public function __construct()
    {
        echo 'Parent class: ' . get_class() . "\n" . 'Child class: ' . get_class($this);
    }

}