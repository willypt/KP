<?php

$conf_ini = parse_ini_file('config.ini');


class Config {

	//const hostUrl = "willypt.com/KP/aplikasi-lan-server";
	const hostUrl = $GLOBALS["conf_ini"]["host"];
	public static function getHostUrl(){
		return 'http://'.self::hostUrl.'/';
	}
}