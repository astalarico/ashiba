<?php

namespace Ashiba\Controllers;

class Controller
{
    protected $controller_actions = array();

    public function __construct()
    {

    }

    protected function register_action( $action )
    {
        array_push( $this->controller_actions, $action );
    }
}