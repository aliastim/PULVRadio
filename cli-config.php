<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'initialisation.php';

return ConsoleRunner::createHelperSet($entityManager);