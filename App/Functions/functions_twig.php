<?php

use App\Classes\ErrorsValidate;
use App\Models\Site\UserModel;
use App\Repositories\MenuRepository;

$site_url = new \Twig\TwigFunction('site_url', function () {
    return 'http://' . $_SERVER['SERVER_NAME'] . ':8888';
});

$menu = new \Twig\TwigFunction('menu', function () {
    $menuRepository = new MenuRepository;
    return $menuRepository->listMenu();
});

$user = new \Twig\TwigFunction('user', function () {
    $userModel = new UserModel;
    return $userModel->find('id', $_SESSION['id']);
});

$errorField = new \Twig\TwigFunction('errorField', function ($field) {
    $errorValidate = new ErrorsValidate;
    return $errorValidate->show($field);
});
