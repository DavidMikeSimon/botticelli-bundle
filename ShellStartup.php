<?php
set_time_limit(0);

$basedir = realpath(__DIR__ . str_repeat("/..", 5));
require_once $basedir . '/vendor/autoload.php';
require_once $basedir . '/app/AppKernel.php';
unset($basedir);

$kernel = new AppKernel('dev', false);

$retries = 3;
while ($retries > 0) {
    try {
        $kernel->boot();
        break;
    } catch (Exception $e) {
        // Ignore it, kernel sometimes fails on first execution
        // FIXME This is a silly hack
    }
    --$retries;
}

if ($retries == 0) {
    throw new \Exception("Unable to boot Symfony kernel");
}

$container = $kernel->getContainer();

unset($kernel);

print("Welcome to Botticelli PHP Shell\n");
print("You can access services via \$container\n");
print("To quit, type q then enter\n");
