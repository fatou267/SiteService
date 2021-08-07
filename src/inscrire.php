<?php
session_start();
require 'include.php';
require 'entete.php';


$result = '<h5>Devenez donneur en versant 2000 Fcfa pour l\'obtention de votre badge de <strong id="h2"> donneur universel </strong></h5>';

    $result .= '<form method="post" action="actionInscription.php" class ="col-md-6">
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
            <input type="text" name="nom" required class="forme" value=""><br>
            <div>Prénom<label>*</label></div>
            <input type="text" name="prenom" required class="forme" value=""><br>
            <div>Téléphone<label>*</label></div>
            <input type="tel" name="tele" required class="forme" placeholder="tout coller"><br>
  
            <div>Email<label>*</label></div>
            <input type="email" name="mail" required class="forme"><br>
            <div>Mot de passe<label>*</label></div>
            <input type="password" name="mdp" required id="input" class="forme"><br>
            <input type="checkbox" onclick="cliquer()">Show password
            <br><br>
            <input type="submit" name="ok" value="valider">
            <input type="reset" name="ok" value="Reinitialiser">
            <p>Déjà un compte?<a href="connexion.php"> se connecter</a></p>
          </fieldset>
        </form>
        ';

  echo $result;

 require 'pied.php';
?>