<?php    
require 'entete.php';
 ?>
<form method="post" action="actionInscription.php" class ="col-md-6">
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
            <input type="text" name="nom" required class="log" value=""><br>
            <div>Prénom<label>*</label></div>
            <input type="text" name="prenom" required class="log" value=""><br>
            <div>Téléphone<label>*</label></div>
            <input type="tel" name="tele" required class="log"><br>
            <div>Email<label>*</label></div>
            <input type="email" name="mail" required class="log"><br>
            <div>Mot de passe<label>*</label></div>
            <input type="password" name="mdp" required class="log"><br>
            <br><br>
            <input type="submit" name="ok" value="valider">
            <input type="reset" value="Reinitialiser">
          </fieldset>
</form>

<?php require 'pied.php'; ?>