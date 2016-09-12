<?php
namespace Medialisk\Librolisk\View;

class GoogleFonts
{
    public static function useGoogleFont($font, $fontStyles = '')
    {
        if (!$fontStyles) {
            $fontStyles = '400,700,400italic';
        } else {
            $fontStyles = str_replace(' ', '', $fontStyles);
        }
        $link = '<link href="//fonts.googleapis.com/css?family=' .
            str_replace(' ', '+', $font) .
            ':' .
            $fontStyles .
            '" rel="stylesheet" type="text/css">';
        $style = '<style>body,html{font-family:"' . $font . '", sans-serif;}</style>';
        return $link . "\r\n" . $style . "\r\n";
    }
}