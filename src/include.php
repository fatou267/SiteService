<?php

define("SRC", dirname(__FILE__));
define("ROOT", dirname(SRC));
define("SP", DIRECTORY_SEPARATOR);
define("CONFIG", ROOT.SP."config");
define("VUE", ROOT.SP."Vue");
define("MODEL", ROOT.SP."Model");
define("BASE_URL", dirname(dirname($_SERVER['SCRIPT_NAME'])));
//print_r(SP); exit();


require CONFIG.SP."config.php";
require MODEL.SP."donnees.class.php";

$model = new Data();
$categorie = $model->RecupererCategorie();


?>