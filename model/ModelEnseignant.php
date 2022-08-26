<?php

   class ModelEnseignant extends CRUD{
       protected $table = 'enseignant';
       protected $primaryKey = 'idenseignant';

       protected $fillable = ['prenom', 'nom', 'phone', 'courriel'];
   } 

?>