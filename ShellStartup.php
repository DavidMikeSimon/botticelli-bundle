<?php
set_time_limit(0);

$basedir = realpath(__DIR__ . str_repeat("/..", 5));
require_once $basedir . '/vendor/autoload.php';
require_once $basedir . '/app/AppKernel.php';
unset($basedir);

$kernel = new AppKernel('dev', false);
$kernel->boot();
$container = $kernel->getContainer();

print("Welcome to Botticelli PHP Shell\n");
print("You can access services via \$container\n");
print("To quit, type q then enter\n");
