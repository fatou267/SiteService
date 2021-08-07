<?php 
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
     $sql = "SELECT * FROM topic order by dateTopic DESC";
     $result = $connexion->prepare($sql);

     $re = $result->execute();
     $data = $result->fetchAll(PDO::FETCH_ASSOC);
    // print_r(count($data)); exit();
   


    ?>
<?php require 'entete.php'; ?>


<?php  
if (empty($data)) {
    echo("Aucun sujet disponible! Merci de poser une nouvelle question");

}
    
foreach ($data as $key => $value):


    
        
?>
<ul class="list-group">
  <li class="list-group-item">Sujet N° <?= $value['idTopic'] ?></li>
  <li class="list-group-item">Titre:  <?= $value['titre'] ?></li>
  <li class="list-group-item">Contenu: <?= $value['contenu'] ?></li>
  <li class="list-group-item">Date: <?= $value['dateTopic'] ?><br>
    </li>
</ul>
    <a href="contenu.php?idTopic=<?= $value['idTopic'] ?>" class="btn btn-outline-success my-2 my-sm-0">Réponses et Commentaires </a>

<?php endforeach ?>












<?php require 'pied.php'; ?>
