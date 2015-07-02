<?php
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	if ($socket === false) {
	    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
	} 
	else {
	    echo "OK.\n";
	}
	$address = '198.123.53.147';
	$service_port = 9999;
	$result = socket_connect($socket, $address, $service_port);
	if ($result === false) {
	    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
	} else {
	    echo "OK.\n";
	}
?>