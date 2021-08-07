<?php 
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');


$s = "select * from categorie";

      $resultat = $connexion->prepare($s);

      $resultat->execute();
      $categorie = $resultat->fetchAll(PDO::FETCH_ASSOC);
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>forum</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="http://bambasocio.atwebpages.com/src/css/app.css">
 <link rel="stylesheet" type="text/css" href="http://bambasocio.atwebpages.com/src/css/footer.css">
 <script type="text/javascript" src="http://bambasocio.atwebpages.com/src/js/app.js"></script>
</head>
<body>
<div class="page">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="http://bambasocio.atwebpages.com/src"><img src="http://bambasocio.atwebpages.com/src/image/logo1.jpg" width="150px" height="150px" ></a>
  </li>
  <li class="nav-item  align">
    <a class="nav-link" href="http://bambasocio.atwebpages.com/src">Accueil</a>
  </li>
  <li class="nav-item dropdown align">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="http://bambasocio.atwebpages.com/src/aide.php" role="button" aria-haspopup="true" aria-expanded="false">Aides</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="http://bambasocio.atwebpages.com/src/aide.php">Cas social</a>
      <a class="dropdown-item" href="http://bambasocio.atwebpages.com/etudiants" >nouveau bachelier</a>
      <a class="dropdown-item" href="http://bambasocio.atwebpages.com/src/contact.php" >Autres</a>
      
    </div>
  </li>
  <li class="nav-item  align">
    <a class="nav-link" href="http://bambasocio.atwebpages.com/src/contact.php" >Contacts</a>
  </li>
  <li class="nav-item align">
    <a class="nav-link" href="http://bambasocio.atwebpages.com/src/multiservices.php"  tabindex="-1" >Multiservices</a>
  </li>
</ul>

<div class="section">
<?php if (!isset($_SESSION['user'])): ?>
       <a href="http://bambasocio.atwebpages.com/src/connexion.php" class="btn btn-outline-success my-2 my-sm-0" >Se connecter</a>
      <a href="http://bambasocio.atwebpages.com/src/inscrire.php"  class="btn btn-outline-success my-2 my-sm-0" >S'inscrire</a>

    <?php endif; ?>
    <?php if (isset($_SESSION['user'])): ?>
          <a href="http://bambasocio.atwebpages.com/src/profil.php"  class="btn btn-outline-success my-2 my-sm-0" ><img src="http://bambasocio.atwebpages.com/src/image/contact.png" width ="50" height="50" ><?= $_SESSION["user"]["Nom"] ?>&nbsp;<?= $_SESSION["user"]["Prenom"] ?></a>
           <a href="http://bambasocio.atwebpages.com/src/deconnecter.php" class="btn btn-outline-success my-2 my-sm-0" >Se déconnecter</a>
        
         

       
     <?php endif; ?>
     </div>


     <br><br><br>
      <nav class="">
        <ul class="">
          <?php 

              foreach ($categorie as $k => $val) {
                echo '<li><a  href="http://bambasocio.atwebpages.com/'.$val['page'].'"  class="perso">'.$val['page'].'</a></li><br>';
              }


           ?>
           <?php if (isset($_SESSION['user'])):

             if ($_SESSION['user']['idRole'] == 1 ) {
                  echo  '<a href="http://bambasocio.atwebpages.com/forum/utilisateur.php" class="perso">Les donneurs </a>';
        }  ?> 
        <?php endif; ?>
            </ul>
      </nav>        
    <section class="">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Bamba Socio Services !</h3>
            </div>
            <div class="panel-body">
<div class="container ">
<a href="javascript:history.back()" class="btn btn-outline-success my-2 my-sm-0">Retour</a><br>
