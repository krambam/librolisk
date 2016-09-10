<?php
require ('../vendor/autoload.php');

use \Medialisk\Librolisk;
echo Librolisk\Url\PrefixUrl::urlPrefixDoubleSlashIfNoProtocol('helloworld.com');
// test