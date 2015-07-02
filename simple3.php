<?php
	$s = socket_create(AF_INET,SOCK_DGRAM,0);
	socket_bind($s,"localhost",9999);
	socket_recvfrom($s,$buf,100,0,$rip,$rport);
	echo "Received ".$buf."from ".$rip.$rport
?>