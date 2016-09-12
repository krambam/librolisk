<?php

namespace Medialisk\Librolisk\Object;

class KeyGenerator
{
    /**
     * is looking if filename already exists. if yes, it puts a number after object name
     * @param $key
     * @param $parent_path
     * @return string
     */
    public static function getFreeKey($key, $parent_path)
    {
        $base_key = $key;

        $i = 2;
        while (\Pimcore\Model\Object\Service::pathExists($parent_path . '/' . $key)) {
            $key = $base_key . "_" . $i;
            $i++;
        }

        return $key;
    }
}