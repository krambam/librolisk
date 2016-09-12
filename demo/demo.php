<?php
require ('../vendor/autoload.php');

use \Medialisk\Librolisk;
echo Librolisk\Url\LinkToDetailPage::linkToDetailPage('hello', 'world', 'http://test.com');