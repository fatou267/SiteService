<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

 if (isset($_GET['idTopic']) && !empty($_GET['idTopic'])) {
     $id = $_GET['idTopic'];
     $sql = "SELECT * FROM forum WHERE idTopic = ? order by date_forum DESC ";
     $result = $connexion->prepare($sql);

     $result->execute(array($id));
     $data = $result->fetchAll(PDO::FETCH_ASSOC);
     // affichage des commentaires 
     $req = "SELECT * FROM commentaire WHERE idTopic = ?  order by dateComment DESC";
     $result1 = $connexion->prepare($req);

     $result1->execute(array($id));
     $var = $result1->fetchAll(PDO::FETCH_ASSOC); 



    
 }

?>
<?php require 'entete.php'; 
if (!isset($_SESSION['user'])) {
      echo 'Veuillez vous s\'inscrire <a href="http://bambasocio.atwebpages.com/src/inscrire.php" > ici </a>';
   }

?>


<?php 
if (empty($data)) {
   echo("<br><br>Soyez le premier à répondre<br><br>");
   echo('<a href="reponse.php?idTopic='.$id.'" class="btn btn-outline-success my-2 my-sm-0">Ajouter une nouvelle réponse</a>');

 }
 if (!empty($data)) :
foreach ($data as $key => $value):
?>
<ul class="list-group">
  <li class="list-group-item">Sujet N°<?= $value['idTopic'] ?></li>
  <li class="list-group-item">R: <?= $value['idForum'] ?></li>
  <li class="list-group-item">Réponses: <?= $value['reponses'] ?></li>
   

 <li class="list-group-item">Date: <?= $value['date_forum'] ?><br>
    </li>
</ul>
<a href="reponse.php?idTopic=<?= $value['idTopic'] ?>" class="btn btn-outline-success my-2 my-sm-0">Ajouter une nouvelle réponse</a>


<?php endforeach  ?>
<?php endif  ?>





<?php 
if (empty($var)) {
   echo("<br><br>Soyez le premier à commenter<br><br>");
   echo('<a href="commentaire.php?idTopic='.$id.'" class="btn btn-outline-success my-2 my-sm-0">Ajouter un nouveau commentaire</a>');

 } 
 if (!empty($var)) :
foreach ($var as $key => $value):
?>
<ul class="list-group">
  <li class="list-group-item">Sujet N°<?= $value['idTopic'] ?></li>
  <li class="list-group-item">C: <?= $value['idComment'] ?></li>
  <li class="list-group-item">Commentaires: <?= $value['textes'] ?></li>
   

 <li class="list-group-item">Date: <?= $value['dateComment'] ?><br>
    </li>
</ul>
<a href="commentaire.php?idTopic=<?= $value['idTopic'] ?>" class="btn btn-outline-success my-2 my-sm-0">Ajouter un nouveau commentaire</a>


<?php endforeach ?>
<?php endif  ?>

<?php require 'pied.php'; ?>
