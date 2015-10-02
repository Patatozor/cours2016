<?php
header("Content-type: application/json");
include_once('../../modele/param.inc.php');
include_once('../../modele/user/login.php');
if(connexion($_POST['login'],md5($_POST['password']))!=1){
    $retour = 'Informations de connection incorrectes';
}else{
    $retour = 1;
}
echo json_encode(array("answer"=>$retour));