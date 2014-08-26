<?php
	require_once 'config.php';

	$req_array = array();
	foreach ($_GET as $key => $value) {
		$req_array[$key] = addslashes($value);
	}
	$req_q_str = "?";
	foreach($req_array as $k => $v){
		$req_q_str .= "$k=$v&";
	}
	$modalpart = (isset($_GET['modalpart']))? true:false;
	$x = isset($_GET['content'])? $_GET['content'] : 'home';
	if (!$modalpart){
		require_once 'template/header.php';	
	}
	include 'bitesize-content/'.$x.'.php';
	if (!$modalpart){
		require_once 'template/footer.php';	
	}

	//usage
	//content: page, param: ....
	//content: home
	//conent: member-dashboard/dashboard