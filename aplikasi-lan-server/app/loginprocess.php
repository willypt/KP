<?php
	$no_anggota = $_GET['no_anggota'];
	$sandi = $_GET['sandi'];
	$x = ($no_anggota == 'test' && $sandi == 'test');
	if($x){
		echo "OK";
	} else {
		echo "NOT_OK";
	}