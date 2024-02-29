<?php

namespace Geekbrains\Application1\Domain\Controllers;
use Geekbrains\Application1\Application\Render;

class PageController {

    public function actionIndex(): string
    {
        $render = new Render();

        return $render->renderPage('page-index.twig', ['title' => 'Главная страница']);
    }
}