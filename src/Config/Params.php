<?php
namespace Config;

use Symfony\Component\Yaml\Yaml;


class Params
{
	public static function readDbal( $file='' )
	{
		if ( !$file ) {
			$file = 'config.yml';
		}

		return Yaml::parse(file_get_contents( $file ))['doctrine']['dbal'];	
	}
}
