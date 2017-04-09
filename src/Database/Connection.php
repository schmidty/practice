<?php
namespace Database;

use Config\Params;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;


class Connection
{
	public static function Connect()
	{
		$config = new Configuration();
		$params = Params::readDbal();
		return DriverManager::getConnection($params, $config);
	}
}




