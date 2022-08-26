<?php

class ControllerHome{

    public function index(){
       return Twig::render('etudiant-index.php');
    }

    public function error(){
        return Twig::render('error.php');
    }
}