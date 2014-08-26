<?php
class Config {
	/**
	 * Edit host URL here. 
	 */
	const hostUrl = "willypt.com/KP/aplikasi-lan-server";
	
	public static function getHostUrl(){
		return 'http://'.self::hostUrl.'/';
	}
}