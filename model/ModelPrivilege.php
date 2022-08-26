<?php

   class ModelPrivilege extends CRUD{
       protected $table = 'privilege';
       protected $primaryKey = 'idprivilege';

       protected $fillable = ['privilege'];
   } 

?>