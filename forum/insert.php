<?php 
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
if (isset($_POST['ok'])) {
	$categorie = $_POST['categorie'];
	$message = $_POST['message'];

	$sql = "INSERT INTO topic (idUti,contenu,titre) VALUES (:idUti,:contenu,:titre) ";
	$result=$connexion->prepare($sql);

	$var = $result->execute(array(
		'idUti' => $_SESSION['user']['idUti'],
		':contenu'=>$message,
		':titre'=>$categorie

	));
   

   if ($var) {

      header("Location: topic.php");
   }
}

?>
<?php require 'entete.php'; 

if (!isset($_SESSION['user'])) {
      echo 'Veuillez vous s\'inscrire <a href="http://bambasocio.atwebpages.com/src/inscrire.php" > ici </a>';
   }


?>

<form method="post" action="" class ="col-md-6">
          <fieldset>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div >Catégorie<label>*</label></div>
            <select name="categorie">
            	<option>Bourses</option>
            	<option>Étudiants</option>
            	<option>Logements</option>
            	<option>Concours</option>
            	<option>Publicités</option>
            	<option>Actualités</option>
            	<option>Informations</option>
            </select>
            <div >Message<label>*</label></div>
            <textarea name="message" size="12px"></textarea>
            <br><br>
            <input type="submit" name="ok" value="valider">
            <input type="reset" value="Reinitialiser">
          </fieldset>
</form>

<?php require 'pied.php'; ?>