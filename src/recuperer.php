<?php
session_start();
require 'include.php';
require 'entete.php';

 $result = '<form method="post" action="forget.php" class ="col-md-6">
            <div>Email<label>*</label></div>
            <input type="email" name="mail"  required  class="forme"><br>
            <div>Nouveau mot de passe:<label>*</label></div>
            <input type="password" name="mdp" required id="input" class="forme">
            <input type="checkbox" onclick="cliquer()">Show password
            <div>Confirmation:<label>*</label></div>
            <input type="password" name="conf" required  class="forme"><br>
            <input type="submit" name="ok_env" value="valider">
            </form>';

  echo $result;

  
require 'pied.php';
?>
