<?php

namespace Clickloc\Projeto\Controllers;

class HomeViewController implements Controller
{
    public function req(): void
    {
        require_once __DIR__ . '/../../view/home.php';
    }
}