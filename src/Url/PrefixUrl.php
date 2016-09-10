<?php
namespace Medialisk\Librolisk\Url;

class PrefixUrl
{
    /**
     * prefixes Links that have no protocoll given with a doubleslash
     * @param $url
     * @return string
     */
    public static function urlPrefixDoubleSlashIfNoProtocol($url)
    {
        if (preg_match('/\:\/\//', $url)) { // matches '://'
            $urlPrefixedLink = $url;
        } else {
            $urlPrefixedLink = '//' . $url;
        }
        return $urlPrefixedLink;
    }
}