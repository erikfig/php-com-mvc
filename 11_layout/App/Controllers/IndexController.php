<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Exceptions\NotFoundException;

class IndexController extends Action
{

    public function index()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("index");
    }

    public function contact()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("contact", false);
    }

    public function error()
    {
        throw new NotFoundException("Página não encontrada");
    }

    public function viewNotExists()
    {

        $this->render("notExists", false);
    }

}
