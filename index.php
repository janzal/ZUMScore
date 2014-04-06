<?php
// ini_set('memory_limit', '128M');
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

// Uncomment this line if you must temporarily take down your site for maintenance.
// require '.maintenance.php';

// Let bootstrap create Dependency Injection container.
$container = require __DIR__ . '/app/bootstrap.php';

// Run application.
$container->application->run();
