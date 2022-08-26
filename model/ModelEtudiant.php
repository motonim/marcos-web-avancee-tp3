<?php

   class ModelEtudiant extends CRUD{
       protected $table = 'etudiant';
       protected $primaryKey = 'idetudiant';

       protected $fillable = ['prenom', 'nom', 'phone', 'courriel', 'groupe_idgroupe', 'img_dir'];
   } 

?>