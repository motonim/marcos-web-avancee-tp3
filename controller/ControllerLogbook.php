<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('Logbook');


class ControllerLogbook{

    public function index(){
       return Twig::render('logbook-index.php');
    }

    public function create($ipaddress, $date, $user, $page){
        $data = ['ipaddress' => $ipaddress, 'date' => $date, 'user_id' => $user, 'page' => $page];
        $logbook = new ModelLogbook;
        $logbook->insert($data); 
    }

    public function list(){
        $logbooks = new ModelLogbook;
        $select = $logbooks->select(); 
       return Twig::render('logbook-list.php', ['logbooks'=>$select]);
    }
}