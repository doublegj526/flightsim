<?php
	$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
	socket_bind($sock, $local, $port) or die('Could not bind to address');

	while(1) {
	    echo socket_read($sock,1024);
	}

	socket_close($sock);
?>