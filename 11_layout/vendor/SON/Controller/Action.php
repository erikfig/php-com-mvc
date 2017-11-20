<?php

namespace SON\Controller;

use SON\Exceptions\NotFoundException;

abstract class Action
{
    protected $views;
    private $action;

    public function __construct()
    {
        $this->views = new \stdClass;
    }

    protected function render($action,$layout = true)
    {
        $this->action = $action;
        if($layout == true && file_exists("../App/Views/layout.phtml")){
            include_once "../App/Views/layout.phtml";
        }else{
            $this->content();
        }
    }
    protected function content()
    {
        $current = get_class($this);
        $singleClassName = strtolower(str_replace("Controller","",str_replace("App\\Controllers\\","",$current)));
        if (file_exists("../App/Views/".$singleClassName."/".$this->action.".phtml")) {
            include_once "../App/Views/".$singleClassName."/".$this->action.".phtml";
        } else {
            throw new NotFoundException("Página não encontrada");
        }
    }
}
