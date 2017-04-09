<?php

namespace Practice;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class AbstractResource
{
	$entityManager = null;


	public function getEntityManager()
	{
		if ($this->entityManager === null) {
			$this->entityManager = $this->createEntityManager();
		}

		return $this->entityManager;
	}

	public function createEntityManager()
	{
		$path = ['src/Entity'];
		$devMode = true;

		$config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

		$connectionOptions = [
			'driver' => '',
			'host'   => 'localhost',
			'dbname' => 'practice',
			'username' => 'root',
			'password' => 'password',
		];

		return EntityManager::create($connectionOptions, $config);
	}

}
