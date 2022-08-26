<?php

   class ModelCours extends CRUD{
       protected $table = 'cours';
       protected $primaryKey = 'idcours';

       protected $fillable = ['titre', 'description', 'enseignant_idenseignant'];

       public function selectCours($table, $champOrdre = null, $ordre = null)
        {
            if ($champOrdre == null) {
                $sql = "SELECT titre, description, concat(enseignant.prenom, ' ', enseignant.nom) AS enseignant, groupe.nom AS groupe FROM $table LEFT JOIN enseignant ON enseignant_idenseignant = idenseignant LEFT JOIN cours_has_groupe ON idcours = cours_idcours LEFT JOIN groupe ON groupe_idgroupe = idgroupe";
            } else {
                $sql = "SELECT titre, description, concat(enseignant.prenom, ' ', enseignant.nom) AS enseignant, groupe.nom AS groupe FROM $table LEFT JOIN enseignant ON enseignant_idenseignant = idenseignant LEFT JOIN cours_has_groupe ON idcours = cours_idcours LEFT JOIN groupe ON groupe_idgroupe = idgroupe ORDER BY $champOrdre $ordre";
            }
            $query = $this->query($sql);
            return $query->fetchAll();
        }
   } 

?>