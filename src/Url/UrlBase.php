<?php
namespace Medialisk\Librolisk\Url;

class UrlBase
{
    /**
     * get Base url of website, respecting protocol
     * @param string $relativePath
     * @return string
     */
    public static function getAbsoluteDomainPath($relativePath = '')
    {
        /*
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        $domain = $_SERVER['SERVER_NAME'];
        $absoluteUrlToPage = $protocol . $domain;
        */
        $serverUrl = new \Zend_View_Helper_ServerUrl();
        $absoluteUrlToPage = $serverUrl->serverUrl();
        if ($relativePath) {
            $absoluteUrlToPage .= $relativePath;
        }
        return $absoluteUrlToPage;
    }
}

?>