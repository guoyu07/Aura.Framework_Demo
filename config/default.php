<?php
/**
 * Package prefix for autoloader.
 */
$loader->add('Aura\Demo\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

// mappings for the web controller factory
$di->params['Aura\Framework\Web\Controller\Factory']['map']['aura.demo.hello'] = 'Aura\Demo\Web\Hello\Page';

// mappings for the cli factory
$di->params['Aura\Framework\Cli\Factory']['map']["$system/package/Aura.Demo/cli/hello"] = 'Aura\Demo\Cli\Hello\Command';

// routes for the demo
$di->params['Aura\Router\Map']['attach']['/'] = function () use ($system) {
    return include "$system/package/Aura.Demo/routes.php";
};
