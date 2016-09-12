<?php

namespace Medialisk\Librolisk\Dump;

require_once(__DIR__ . '/functions/mlDump.php');

class MlDump
{
    public static function load()
    {
        // only for calling initing and calling require_once for global scope function
    }

    public static function dump($object, $hidePrivate = false)
    {
        $css = <<<HTML
<style>
    body{ background-color: #888; }
    body > *{ visibility: hidden !important; width: 100% !important; z-index: -10 !important;}
    .ml-dump-container{ display: block !important; width: 100%; min-height: 2000px; left: 0; top: 0; z-index: 9999;}
    .ml-dump-container > *{ visibility: visible !important;}
    pre.sf-dump{font-size: 20px !important;}
    .sf-dump-str{color: #169B2A !important;}
    .sf-dump-key{color: #26AB0A !important;}
    .sf-dump{background-color:#fff !important;}
    .sf-dump-public{ color: #222 !important; }
    .sf-dump-protected{ color: #a0a0a0 !important; text-decoration: line-through}
    .sf-dump-private{ color: #9f9f9f !important; text-decoration: line-through}
</style>
HTML;
        echo $css;
        if ($hidePrivate) {
            echo '<style>.sf-dump-private, .sf-dump-private + span, .sf-dump-protected, .sf-dump-protected + span  {display: none !important;}</style>';
        }
        echo '</p></div></div></div></div></div></div></div></div></section></div></div></div></div></div></div></div></div>';
        echo '<div class="ml-dump-container">';
        \Symfony\Component\VarDumper\VarDumper::dump(($object));
        if (get_class_methods($object) !== null) {
            \Symfony\Component\VarDumper\VarDumper::dump(get_class_methods($object));
        }
        echo '</div>';
        die();
    }
}