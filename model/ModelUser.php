<?php

   class ModelUser extends CRUD{
        protected $table = 'user';
        protected $primaryKey = 'iduser';

        protected $fillable = ['username', 'password', 'email', 'temp_password', 'privilege_idprivilege'];
   
        public function checkuser($username, $password) {

            $sql = "SELECT * FROM $this->table WHERE username = ?";
            $stmt = $this->prepare($sql);
            $stmt->execute(array($username));

            $count=$stmt->rowCount();

            if($count==1){
                $user_info = $stmt->fetch();
                $dbPassword = $user_info["password"];

                if(password_verify($password, $dbPassword)){
                    
                    session_regenerate_id();
                    $_SESSION['user_id'] = $user_info['iduser'];
                    $_SESSION['privilege_id'] = $user_info['privilege_idprivilege'];
                    $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

                    RequirePage::redirect('etudiant/list');

                } else {
                    return "SVP Verifier le mot de pass";
                }
            } else {
                return "SVP Verifier le nom de utilisateur";
            }
         
        }
    } 

?>