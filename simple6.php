#!/usr/local/bin/php -q
<?php
error_reporting(E_ALL);

/* Allow the script to hang around waiting for connections. */
set_time_limit(0);

/* Turn on implicit output flushing so we see what we're getting
 * as it comes in. */
ob_implicit_flush();

$address = '198.123.53.147';
$port = 9999;
echo "hi1";
if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
}
echo "hi2";
if (socket_bind($sock, $address, $port) === false) {
    echo "socket_bind() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
}
echo "hi3";
$msgsock = socket_accept($sock);
if (false === ($buf = socket_read($msgsock, 2048, PHP_NORMAL_READ))) {
    echo "sup nigga";
}
else{
    echo $buf;
}

socket_close($sock);
?>