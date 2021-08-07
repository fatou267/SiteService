<?php 
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
if (isset($_POST['ok'])) {
    if (isset($_GET['idTopic']) && !empty($_GET['idTopic'])) {
     $id = $_GET['idTopic'];
    $reponse = $_POST['reponse'];

    $sql = "INSERT INTO forum(idTopic,idUti,reponses)  VALUES (:idTopic,:idUti,:reponses)";
    $result = $connexion->prepare($sql);

    $var = $result->execute(array(
        ':idTopic' => $id,
        ':idUti' => $_SESSION['user']['idUti'],
        ':reponses' => $reponse

    )); 

    if ($var) {
      header("Location: index.php");
    }
}
}


?>
<?php require 'entete.php'; 
if (!isset($_SESSION['user'])) {
     echo 'Veuillez vous s\'inscrire <a href="http://bambasocio.atwebpages.com/src/inscrire.php" > ici </a>';
   }

?>

<form class="was-validated" method="post" action="">
  <div class="mb-3">
    <label for="validationTextarea">Votre Réponse</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="votre réponse....." required name="reponse"></textarea>
    <div class="invalid-feedback">
      Please enter your answer  .
    </div>
  </div>
   <input type="submit" name="ok"> 

</form>





<?php require 'pied.php'; ?>