<?php
session_start();
require 'include.php';
require 'entete.php';

 global $model;
      $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $_POST["idUti"] = $_SESSION['user']['idUti'];
      $dataUp = $model->UpdateInfoClients($_POST);
      //print_r($dataUp); exit();
       if ($dataUp) {
        $_SESSION['user'] = $model->RecupererUtilisateur($_SESSION['user']['idUti']);
           $result = '<script>
                  alert("Mise à jour reussie ");
                  location.href = "http://bambasocio.atwebpages.com/src";
                  </script> ';
       }
       else
      {
           $result = '<script>
                  alert("Mise à jour echouée ");
                  location.href = "update.php";
                  </script> ';      }
      

      echo $result;


require 'pied.php';
?>
