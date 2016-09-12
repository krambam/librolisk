<?php

namespace Medialisk\Librolisk\View;

class YoutubeIframe
{
    public static function getYoutubeIframe($videoId)
    {
        if (!$videoId) {
            return '';
        } else {
            return <<<HTML
<div class="videoWrapper" >
    <iframe id="ytplayer" type="text/html" width="720" height="405"
    src="https://www.youtube.com/embed/{$videoId}"
    frameborder="0" allowfullscreen>
    </iframe>
</div >
HTML;
        }
    }
}