<?php 
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

?>
<?php require 'entete.php'; ?>

<div class ="mt-2 ">
<a href="insert.php" class="btn btn-block btn-outline-primary">Poser votre question</a>
</div>
<div class ="mt-2">
<a href="topic.php" class="btn btn-block btn-outline-primary">Voir les anciens sujets</a>
</div>

</div>
<br><br><br>
<?php require 'pied.php'; ?>
