<?php

class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('errores/index');
       // echo "<p>Error al cargar el recurso</p>"; 
    }
}
