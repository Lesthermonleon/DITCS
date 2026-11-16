<?php

$host = '142.251.170.108';
$errno = 0;
$errstr = '';

$fp = fsockopen($host, 587, $errno, $errstr, 10);

if (!$fp) {
    echo "FAILED: {$errno} - {$errstr}" . PHP_EOL;
} else {
    echo "CONNECTED TO IP" . PHP_EOL;
    echo fgets($fp);
    fclose($fp);
}