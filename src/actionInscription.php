<?php
session_start();
require 'include.php';
require 'entete.php';

 global $model;
      $nom=$_POST['nom'];
      $prenom = $_POST['prenom'];
       
      $tele= $_POST['tele'];
      $email=$_POST['mail'];
        
      $mdp=$_POST['mdp'];

      $data = $model->creerUtilisateur($nom ,$prenom,$tele,$email,$mdp);
      if ($data) {
        $datUti = $model->authentifier($email,$mdp);
         if ($datUti) {
           $_SESSION['user'] = $datUti;
           
            echo '<script>
                  alert("Inscription reussie!!");
                location.href = " http://bambasocio.atwebpages.com/src";
                  </script> ';  
         }
      }
      else
      {
         echo '<script>
                  alert("Inscription echouée");
                  history.back();
                  </script> ';
      }
  
require 'pied.php';
?>