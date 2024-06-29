<?php

use App\Classes\Parameters;
use App\Classes\Template;


$template = new Template;
$twig = $template->init();

$twig->addFunction($site_url);
$twig->addFunction($menu);

/**
 * Chamando o controller digitado na URL
 * http://localhost:8888/controller
 */
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);

/**
 * Chamando o método da URL
 * http://localhost:8888/controller/metodo
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);


/**
 * Chamando o controller pela classe controller e pelo metodo
 */
$parameters = new Parameters;
$parameter = $parameters->getParameterMethod($controller, $method);

$controller->$method($parameter);
