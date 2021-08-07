<?php
session_start();
require 'include.php';
require 'entete.php';
$result ='<h5>Bienvenue dans la rubrique contact de Bamba socio</h5>';
     $result .='<div class="global">';
     $result .='<p>Bamba socio est disponible et joignable dans tous les réseaux sociaux .</p>';
     $result .='<p><strong id="h2">WhatsApp</strong> sur ce numéro <strong id="h2">78-131-21-24</strong></p>';
     $result .='<p><strong id="h2">Appelez  </strong>directement sur ce numéro <strong id="h2">78-131-21-24</strong></p>';
     $result .='<p><strong id="h2">Envoyez   </strong>nous un mail sur <strong id="h2">Bambasocio@gmail.com</strong></p>';
     $result .='<p>Les liens des différents réseaux sociaux sont disponible en bas de la page.</p>';
      $result .='</div>';
    


    echo  $result;

?>
<a ><img alt="facebook" src="http://bambasocio.atwebpages.com/src/image/facebook.png" width="5%" height="5%" title="Rejoignez nous sur facebook"></a>
<a><img alt="twitter" src="http://bambasocio.atwebpages.com/src/image/twitter.png"  width="5%" height="5%" title="Rejoignez nous sur Twitter"></a>
<a><img alt="instagram" src="http://bambasocio.atwebpages.com/src/image/instagram.jpg" width="5%" height="5%" title="Rejoignez nous sur Instagram"></a>
<?php  
require 'pied.php';
?>