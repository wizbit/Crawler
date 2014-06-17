<?php

namespace Mjs\Doctrine;

use Doctrine\ORM\Tools\Setup;

class Configuration
{
	public static function setup($devMode)
	{
		$proxyDir = null;
		$cache = null;

		return Setup::createAnnotationMetadataConfiguration(array(__DIR__."/.."), $devMode, $proxyDir, $cache, false);
	}
} 