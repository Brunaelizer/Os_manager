<?php

use App\Repositories\MenuRepository;

$site_url = new \Twig\TwigFunction('site_url', function () {
    return 'http://' . $_SERVER['SERVER_NAME'] . ':8888';
});

$menu = new \Twig\TwigFunction('menu', function () {
    $menuRepository = new MenuRepository;
    return $menuRepository->listMenu();
});
