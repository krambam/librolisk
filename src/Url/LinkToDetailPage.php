<?php
namespace Medialisk\Librolisk\Url;

class LinkToDetailPage
{
    public static function linkToDetailPage($id, $title, $prefix = false)
    {
        $url = \Medialisk\Librolisk\Url\CleanUrl::getCleanUrl($id) .
            "/" .
            \Medialisk\Librolisk\Url\CleanUrl::getCleanUrl($title);
        if ($prefix) {
            $url = $prefix . '/' . $url;
        }
        return $url;
    }
}