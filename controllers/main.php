<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
        //echo "<p> nuevo controlador pricipal</p>"; 
    }
    function saludo(){
        echo "<p> hola</p>"; 
    }
}
