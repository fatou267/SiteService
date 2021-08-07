<?php 
 
 /**
  * 
 */
 class Data 
 {
  private $connexion;
  function __construct()
    {
      
    try{
          $this->connexion = new PDO('mysql:host='.host.';dbname='.database,username,password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));

    }catch(PDOException $e){
    die('impossible de se connecter a la base de donnee');
  }
  }
  function authentifier($mail,$password){
    $sql = "select * from Utilisateur where mail = :mail";
    try
    {
    $result = $this->connexion->prepare($sql);

    $result->execute(array(':mail' => $mail));

    $data = $result->fetch(PDO::FETCH_ASSOC);
    if ($data && password_verify($password, $data['password'])) {
      //destruction du champ password

      unset($data['password']);
      return $data;
    }
    else
      {
        return false;
      }
  }
  catch(PDOException $e){
         return null;
  }

 }
 function creerUtilisateur($nom ,$prenom,$tel,$mail,$password){
    
      $req = "INSERT INTO Utilisateur(Nom,Prenom,telephone,mail,password) VALUES (:Nom,:Prenom,:telephone,:mail,:password)";
      try
      {
      $result = $this->connexion->prepare($req);

      $var = $result->execute(array(
        ':Nom'=> $nom ,
        ':Prenom' => $prenom,
        ':telephone' =>$tel,
        ':mail'=>$mail,
        ':password' => password_hash($password, PASSWORD_DEFAULT)
      ));
      if ($var) {
        return true;
      }
      else
      {
        return false;
      }
    }
    catch(PDOException $e){
         return null;
  }

  }
   function UpdateInfoClients($tab)
  {
      $req = "UPDATE `Utilisateur` SET ";
      $id = $tab['idUti'];
     // print_r($id); exit();
      unset($tab['idUti']);
      try
    {
      foreach ($tab as $key => $value) {
        $value = addslashes($value);
        $req .= " $key = '$value' ,";
      }
      $req = substr($req, 0 ,-1);
      $req .= " where idUti = :idUti";
      $result = $this->connexion->prepare($req);

      $var = $result->execute(array('idUti' => $id));


      if ($var) {
        return true;
      }
      else
      {
        return false;
      }
    }catch(PDOException $e){
         return null;
    }
  }
  function RecupererUtilisateur($id)
   {
      $sql = "select * from Utilisateur WHERE idUti = ?";
      try
    {
      $result = $this->connexion->prepare($sql);

      $var = $result->execute(array($id));
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      if ($data) {
        unset($data[0]['password']);
        return $data[0];
      }
      else
      {
        return false;
      }
    }catch(PDOException $e){
         return null;
    }
   }
   function RecupererCategorie()
   {
      $sql = "select * from categorie";
      try
    {
      $result = $this->connexion->prepare($sql);

      $var = $result->execute();
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      if ($data) {
        return $data;
      }
      else
      {
        return false;
      }
    }catch(PDOException $e){
         return null;
    }
   }
   function ajouterSociale($text,$img)
   {
      $sql = "INSERT INTO Sociale (libSocial,image) VALUES (:libSocial,:image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libSocial' => $text,
                ':image' => $img ));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
 function afficherSociale($id)
   {
      $sql = "SELECT libSocial FROM Sociale WHERE idSocial = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterInfo($text,$img)
   {
      $sql = "INSERT INTO Info (libInfo,image) VALUES (:libInfo,:image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libInfo' => $text,
                ':image' => $img ));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
 function afficherInfo($id)
   {
      $sql = "SELECT libInfo FROM Info WHERE idInfo = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterActu($text,$img)
   {
      $sql = "INSERT INTO Actualite (libActualite,image) VALUES (:libActualite,:image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libActualite' => $text,
                ':image' => $img ));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
 function afficherActu($id)
   {
      $sql = "SELECT libActualite FROM Actualite WHERE idActualite = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterPub($text,$img)
   {
      $sql = "INSERT INTO Publicite (libPublicite,image) VALUES (:libPublicite,:image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libPublicite' => $text,
                ':image' => $img ));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
 function afficherPub($id)
   {
      $sql = "SELECT libPublicite FROM Publicite WHERE idPublicite = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterEtudiant($text,$img)
   {
      $sql = "INSERT INTO Etudiant (libEtu,image) VALUES (:libEtu, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libEtu' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherEtudiant($id)
   {
      $sql = "SELECT libEtu FROM Etudiant WHERE idEtu = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
function ajouterPermis($text,$img)
   {
      $sql = "INSERT INTO Permis (libPermis,image) VALUES (:libPermis,:image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libPermis' => $text,
                ':image' => $img ));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
  function afficherPermis($id)
   {
      $sql = "SELECT libPermis FROM Permis WHERE idPermis = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }

   function ajouterConcours($text,$img)
   {
      $sql = "INSERT INTO Concours (libConcours,image) VALUES (:libConcours, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libConcours' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherConcours($id)
   {
      $sql = "SELECT libConcours FROM Concours WHERE idConcours = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterCodi($text,$img)
   {
      $sql = "INSERT INTO Codification (libCodification,image) VALUES (:libCodification, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libCodification' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherCodi($id)
   {
      $sql = "SELECT libCodification FROM Codification WHERE idCodification = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterOrient($text,$img)
   {
      $sql = "INSERT INTO Orientation (libOrientation,image) VALUES (:libOrientation, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libOrientation' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherOrient($id)
   {
      $sql = "SELECT libOrientation FROM Orientation WHERE idOrientation = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
    function ajouterEtranger($text,$img)
   {
      $sql = "INSERT INTO Etranger (libEtranger,image) VALUES (:libEtranger, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libEtranger' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherEtranger($id)
   {
      $sql = "SELECT libEtranger FROM Etranger WHERE idEtranger = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }
   function ajouterMaroc($text,$img)
   {
      $sql = "INSERT INTO Maroc (libMaroc,image) VALUES (:libMaroc, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libMaroc' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherMaroc($id)
   {
      $sql = "SELECT libMaroc FROM EtudiMaroc WHERE idMaroc = ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }

   function ajouterSN($text,$img)
   {
      $sql = "INSERT INTO Senegal (libsn,image) VALUES (:libsn, :image)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libsn' => $text, ':image' =>$img));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherSN($id)
   {
      $sql = "SELECT libsn FROM Senegal WHERE idsn= ?";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array($id));

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }



 function ajouterResultat($txt,$lien){
    $sql = "INSERT INTO Resultat (libResultat,lien) VALUES (:libResultat, :lien)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libResultat' => $txt, ':lien' =>$lien));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherResultat()
   {
      $sql = "SELECT * FROM Resultat order by dateResultat DESC";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute();

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   }   
   function ajouterConCode($txt){
    $sql = "INSERT INTO ConCode (libConCode) VALUE (:libConCode)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libConCode' => $txt));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherConCode()
   {
      $sql = "SELECT * FROM ConCode order by dateConcodi DESC";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute();

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   } 

   function ajouterVie($txt){
    $sql = "INSERT INTO Vie (libVie) VALUE (:libVie)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libVie' => $txt));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherVie()
   {
      $sql = "SELECT * FROM Vie order by dateVie DESC";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute();

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   } 
   function ajouterConseilOr($txt){
    $sql = "INSERT INTO ConseilOr (libConseilOr) VALUE (:libConseilOr)";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(':libConseilOr' => $txt));

      if ($var) {
         return true;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    } 

   }
 function afficherConseilOr()
   {
      $sql = "SELECT * FROM ConseilOr order by dateConOr DESC";
      try
      {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute();

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      //print_r($data); exit();
      if ($data) {
         return $data;
      }
      else
      {
        return false;
      }
      }catch(PDOException $e){
         return null;
    }

   } 





 }





 
 ?>