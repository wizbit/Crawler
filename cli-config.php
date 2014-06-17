<?php

require_once 'bootstrap.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($container->get('doctrine.orm.entity_manager'));

 