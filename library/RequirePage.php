<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }

    static function redirect($url){
        header("location: http://localhost:8888/marcosTP3/$url");
    }

    static function requireLibrary($page){
        return require_once 'library/'.$page.'.php';
    }
}