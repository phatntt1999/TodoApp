<?php

class BaseController
{
    public function render($file, $data = [])
    {
        $view_file = 'Views/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            require_once($view_file);
        }
    }
}
