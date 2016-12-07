<?php

class settings{
	public static $DB_SERVER = 'localhost';
	public static $DB_USER = 'angiusNicola';
	public static $DB_PASS = 'beluga2785';
	public static $DB_NAME = 'amm15_angiusNicola';

	private static $appPath;

	public static function getApplicationPath(){
	
		if(!isset(self::$appPath)){
			switch($_SERVER['HTTP_HOST']){
				case 'localhost':
					self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/ProgettoDefinitivoAMM2015/';
					break;
				case 'spano.sc.unica.it':
		self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . 'amm2015/angiusNicola/ProgettoDefinitivoAMM2015/';
		break;

		default:
			self::$appPath = '';
			break;					

			}			
		
		}		

	return self::$appPath;
		
	}

}

?>
