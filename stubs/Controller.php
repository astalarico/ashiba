<?php


namespace MID\Functions\Controllers;
use MID\Functions\Utility as U;


class Messages
{

    // Example get_messages, add_user etc.
    public static function ashiba_action()
    {
        U::log("MESSAGES");
        $messages = array();
        wp_send_json( $messages );
    }
}