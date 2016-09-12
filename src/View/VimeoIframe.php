<?php

namespace Medialisk\Librolisk\View;

class VimeoIframe
{
    public static function getVimeoIframe($videoId)
    {
        if (!$videoId) {
            return '';
        } else {
            return <<<HTML
<div class="videoWrapper" >
    <iframe allowfullscreen = ""
            frameborder = "0"
            height = "349"
            mozallowfullscreen = ""
            src = "https://player.vimeo.com/video/{$videoId}?color=ffffff&amp;portrait=0&amp;title=0&amp;byline=0"
            webkitallowfullscreen = ""
            width = "560" >
    </iframe >
</div >
HTML;
        }
    }
}