<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Gravatar Helper
 *
 * Gravatar Helper functions to utilize with Codeigniter 2.x and 3.x
 * or Standard PHP Application.
 *
 * @package		CodeIgniter Gravatar
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Omkar Tapale
 * @copyright   2016 Omkar Tapale
 * @license     MIT
 * @license     http://www.opensource.org/licenses/mit-license.php
 * @version     v1.0.0
 *
 * The latest version of CodeIgniter Gravatar Helper can be obtained from:
 * https://github.com/omkartapale/CodeIgniter-Gravatar-Helper
 */


if (!function_exists('get_gravatar')) {

    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     *
     * @param string $email The email address
     * @param int $s Size in pixels, defaults to 80px [ 1 - 2048 ]
     * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
     * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
     * @param bool $img True to return a complete IMG tag False for just the URL
     * @param array $atts Optional, additional key/value attributes to include in the IMG tag
     * @return String containing either just a URL or a complete image tag
     * @source http://gravatar.com/site/implement/images/php/
     */
    function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }
}