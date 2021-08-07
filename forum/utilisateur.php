<?php 
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

 ?>
 <?php require 'entete.php'; ?>
<a href="ajouterUsers.php" class="btn btn-outline-success my-2 my-sm-0">Ajouter un nouveau utilisateur</a>
<table class="table" border="1" align="center">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prénom</th>
                          <th scope="col">Téléphone</th>
                          <th scope="col">Mail</th>
                          <th scope="col">Password</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> 
      <?php $sql = "select * from Utilisateur ";

      $result = $connexion->prepare($sql);

      $var = $result->execute();
      $data = $result->fetchAll(PDO::FETCH_ASSOC); 
         foreach ($data as $key => $value): ?>
          <tr>
          <th scope="row"><?= $value["idUti"]; ?></th>
           <td><?= $value["Nom"]; ?></td>
          <td><?= $value["Prenom"]; ?></td>
          <td><?= $value["telephone"]; ?></td>
          <td><?= $value["mail"]; ?></td>
          <td><?= $value["password"]; ?></td>
           <td><a href="modifierUsers.php?idUti=<?= $value["idUti"]; ?>" class="btn btn-outline-primary my-2 my-sm-0" >Modifier</a>
           
           <a href="supprimerUsers.php?idUti=<?= $value["idUti"]; ?>" class="btn btn-outline-danger my-2 my-sm-0" >Supprimer </a>
           </td>
            </tr>
                
     <?php endforeach ?>
     </tbody></table>



 <?php require 'pied.php'; ?>