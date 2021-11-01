<?php

/**
 * MIT License
 * Copyright (c) 2021 Electronic Student Services @ Appalachian State University
 *
 * See LICENSE file in root directory for copyright and distribution permissions.
 *
 * @author Matthew McNaney <mcnaneym@appstate.edu>
 * @license https://opensource.org/licenses/MIT
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$entityManager = EntityManager::create($conn, $config);
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
