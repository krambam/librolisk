<?php
if (!function_exists('mlDump')) {
    function mlDump($object)
    {
        \Medialisk\Librolisk\Dump\MlDump::dump($object);
    }
}