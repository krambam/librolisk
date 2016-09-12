<?php
namespace Medialisk\Librolisk\Url;

class LinkToDetailPage
{
    public static function linkToDetailPage($id, $title, $prefix = false)
    {
        $url = CleanUrl::getCleanUrl($id) . "/" . CleanUrl::getCleanUrl($title);
        if ($prefix) {
            $url = $prefix . '/' . $url;
        }
        return $url;
    }
}