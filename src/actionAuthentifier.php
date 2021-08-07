<?php
session_start();
require 'include.php';
require 'entete.php';

global $model;
      
        $email=$_POST['mail'];
        $mdp=$_POST['mdp'];
      
      $datUti = $model->authentifier($email,$mdp);
         if ($datUti) {
            $_SESSION['user'] = $datUti;
            
              echo '<script>
                  alert("authentification reussie!! ");
                  location.href = "http://bambasocio.atwebpages.com/src";
                  </script> '; 
             
          }
          else
          {
             echo '<script>
                  alert("authentification echouée ");
                  history.back();
                  </script> ';
          }


require 'pied.php';
?>