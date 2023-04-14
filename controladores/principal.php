<?php 
    namespace controladores;
    class principal{
        public function presentarPantalla(){
            include "vistas/login.php";
        }
    }
    class menu{
        public function presentarMenu(){
            include "vistas/menu.php";
        }
    }
?>