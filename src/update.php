<?php
session_start();
require 'include.php';
require 'entete.php';

 $result ='<form method="post" action="actionUpdate.php" class ="col-md-6">
          <fieldset>
            <legend>Remplir les champs</legend>
            <div>Sélectionnez votre sexe<label>*</label></div>
            <select>
              <option selected="true">Sexe</option>
              <option>M</option>
              <option>F</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div >Nom<label>*</label></div>
            <input type="text" name="Nom" required value="'.$_SESSION["user"]["Nom"].'" class="forme" ><br>
            <div>Prénom<label>*</label></div>
            <input type="text" name="Prenom" required value="'.$_SESSION["user"]["Prenom"].'" class="forme" ><br>
            <div>Téléphone<label>*</label></div>
            <input type="tel" name="telephone" required value="'.$_SESSION["user"]["telephone"].'" class="forme"><br>
            <div>Email<label>*</label></div>
            <input type="email" name="mail" required value="'.$_SESSION["user"]["mail"].'" class="forme"><br>
            
            <div>Mot de passe<label>*</label></div>
            <input type="password" name="password" required id="input" class="forme"><br>
            <input type="checkbox" onclick="cliquer()">Show password
          

            <br><br>
            <input type="submit"  value="Mettre à jour">
            <input type="reset"  value="Reinitialiser">
          </fieldset>
        </form>';

     echo $result;


require 'pied.php';
?>