<?php
$loaderPath = __DIR__ . '/../vendor/autoload.php';

if (!is_readable($loaderPath)) {
    throw new \Exception("Run \"php composer\" to install first");
}

require $loaderPath;
