<?php

abstract class AbstractController
{
 

    protected function render(string $template, array $data)
    {
        require "templates/layout.phtml";
    }

    protected function redirect(string $route)
    {
        header("Location: $route");
    }
}

?>