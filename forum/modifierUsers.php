<?php  
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
if (isset($_GET['idUti']) && !empty($_GET['idUti'])) {
	$id = $_GET['idUti'];
	//print_r($id); exit();
	$sql = "SELECT * FROM Utilisateur WHERE idUti = ?";
	$result = $connexion->prepare($sql);

	 $re = $result->execute(array($id));

	 //print_r($re); exit();
	 $var = $result->fetchAll(PDO::FETCH_ASSOC);
	 //print_r($var); exit();
	 if (isset($_POST['ok'])) {

	 $req = "UPDATE `Utilisateur` SET Nom = ?, Prenom = ?, telephone = ?, mail = ? WHERE idUti = ? ";
	 $result = $connexion->prepare($req);

	 $re = $result->execute(array($_POST["Nom"], $_POST["Prenom"],$_POST["telephone"],$_POST["mail"],$id ));
	 //print_r($re); exit();
	 header("Location: utilisateur.php");
      
 	}

}
else
{
	echo("introuvable");
}

?>
<?php require 'entete.php'; ?>
<form method="post" action="" class ="col-md-6">
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
            <input type="text" name="Nom" required value="<?= $var[0]["Nom"] ?>" class="log" ><br>
            <div>Prénom<label>*</label></div>
            <input type="text" name="Prenom" required value="<?= $var[0]["Prenom"] ?>" class="log" ><br>
            <div>Téléphone<label>*</label></div>
            <input type="tel" name="telephone" required value="<?= $var[0]["telephone"] ?> " class="log"><br>
            <div>Email<label>*</label></div>
            <input type="email" name="mail" required value="<?= $var[0]["mail"] ?>" class="log"><br>
            <br><br>
            <input type="submit" name="ok" value="Envoyer">
            <input type="reset"  value="Reinitialiser">
          </fieldset>
        </form>

        <?php require 'pied.php'; ?>