<?php

   class ModelLogbook extends CRUD{
       protected $table = 'journal_de_bord';
       protected $primaryKey = 'idjournal';

       protected $fillable = ['ipaddress', 'date', 'user_id', 'page'];
   } 

?>