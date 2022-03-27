<?php

    class Controller
    { 

        protected function render(string $template, array $data = array())
        {
            require_once "app/resourse/views/$template.php";
        }
    }