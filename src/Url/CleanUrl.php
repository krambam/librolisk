<?php
namespace Medialisk\Librolisk\Url;

class CleanUrl
{
    /**
     * @param $string
     * @return string
     */
    public static function getCleanUrl($string)
    {
        $output = $string;
        $output = \Medialisk\Librolisk\Text\Util::toUrl($output);
        $output = str_replace('.', '-', $output);
        $output = preg_replace('/([^a-zA-Z0-9])/', '-', $output);
        $output = preg_replace('/-+/', '-', $output);
        $output = strtolower(trim($output, '-'));
        return $output;
    }
}