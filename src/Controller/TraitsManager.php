<?php

namespace Medialisk\Librolisk\Controller;

class TraitsManager
{
    static $path;
    public static function setPath($path){
        self::$path = $path;
    }
    public static function getPath(){
        return self::$path;
    }
    public static function loadAllTraits($path=NULL){
        $path = $path ?: self::$path;
        $files = scandir($path);
        foreach($files as $file){
            if(strpos($file, '.php') > 0){
                require_once($path . '/' . $file);
            }
        }
    }
}