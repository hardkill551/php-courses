<?php

spl_autoload_register(function ($class) {
   $router = str_replace("Alura\\Banco", "src", $class);
   $router = str_replace("\\", DIRECTORY_SEPARATOR, $router);
   $router .= '.php';
   if (file_exists($router)) {
       require_once $router;
   }
});