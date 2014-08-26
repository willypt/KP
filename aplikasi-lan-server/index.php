<?php
	$content = "";
	if(isset($_GET['content'])){
		$content = $_GET['content'];
	} else {
		$content = "404";
	}

	if(!file_exists('./app/'.$content.'.php')){
		$content = '404';
	}
	
	//include 'connect.php';
	//if(isset($_GET['app']) && $content != '404'){
	include './app/'.$content.'.php';
	
	/* www.example.com/?content=home and www.example.com/?app&content=submitForm */