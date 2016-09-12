<?php

namespace Medialisk\Librolisk\Objectlist;

class Defaults
{
    public static function getNewsDefaultListFilter()
    {
        // time has to be set to 0:00h, because pimcore date is set to 0:00h
        $todayMidnight = strtotime("0:00", time());

        return array(
            'string' => "title <> '' AND datefrom <= ? AND dateto >= ? OR title <> '' AND datefrom <= ? AND dateto IS NULL",
            'array' => array(
                $todayMidnight,
                $todayMidnight,
                $todayMidnight
            )
        );
    }
}