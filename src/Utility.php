<?php

namespace Ashiba;

class Utility{
    public static function pluralize( $singular, $plural = null )
    {
        if ( strlen( $singular ) <= 1 ) return $singular;
        if ( $plural !== null ) return $plural;

        $last_letter = strtolower( $singular[ strlen( $singular ) - 1 ] );
        switch ( $last_letter ) {
            case 'y':
                return substr( $singular, 0, -1 ) . 'ies';
            case 's':
                return $singular . 'es';
            default:
                return $singular . 's';
        }
    }

    public static function camelToOther($string, $other = '-')
    {
        return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', "$1{$other}", $string));
    }

}