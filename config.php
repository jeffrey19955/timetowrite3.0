<?php
define('SMARTY', 'Smarty-3.1.15/libs/Smarty.class.php');
define('PASSWORD_SALT', 'ThiS Is salt');
 
require_once(SMARTY);
 
$smarty = new Smarty();
 
$smarty->compile_dir    = 'templates_c/';
$smarty->template_dir   = 'templates/';
$smarty->debugging      = false;
 
$connection = new PDO('mysql:host=82.157.27.52;dbname=timetowrite', 'timetowrite', 'bPrMrYgp');
?>