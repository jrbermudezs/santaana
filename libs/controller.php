<?php

class Controller{

    function __construct(){
        echo "controlador base";
        $this->view = new View();
    }
}