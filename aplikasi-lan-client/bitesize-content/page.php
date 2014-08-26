<?php	
	$x = file_get_contents(Config::getHostUrl().$req_q_str);
	echo $x;