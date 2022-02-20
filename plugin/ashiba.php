<?php
/**
 * Plugin Name:       Ashiba
 * Plugin URI:        https://ashiba.com
 * Description:       Ashiba-Description
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Anthony Talarico
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ashiba-domain
 **/

use Symfony\Component\Finder\Finder;

namespace Ashiba;

if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
require_once 'defines.php';

class Boot{

    public function __construct()
    {
        $controllers = new Finder();
        $controllers->files()->in(__DIR__ .'/src/commands');
    }
}