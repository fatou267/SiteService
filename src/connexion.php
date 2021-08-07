<?php
session_start();
require 'include.php';
require 'entete.php';

 $result = '<h1>Connexion</h1>';
     
       $result .= '<form method="post" action="actionAuthentifier.php">
        <fieldset>
          <table>
            <tr>
              <td>
          <label>Nom d utilisateur : </label></td>
          <td><input type="email" name="mail" required ><br><br></td>
        </tr>
        <tr>
        <td>
        
          

          <label>Mot de passe : </label></td>
          <td><input type="password" name="mdp" required id="input" >
             <input type="checkbox" onclick="cliquer()">Show password
          <br><br></td>
        </tr>
       
        
        <br>
        <tr>
        <td>
          <input type="submit"  value="connecter"><br></td></tr>
          <tr>
          <td></td><td>
          <a href="recuperer.php"><label>Mot de passe oublié</label></a></td></tr>
        </table>
        </fieldset>
      </form>
      ';
    
   echo $result;

   require 'pied.php';
?>
