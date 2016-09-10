<?php
namespace Medialisk\Librolisk\Text;

class RemoveNbsp
{
    public static function removeNbspWithSingleWhitespace($text)
    {
        $text = str_replace('&nbsp;', ' ', $text);
        $text = preg_replace('/\s+/', ' ', $text);
        return $text;
    }
}

?>