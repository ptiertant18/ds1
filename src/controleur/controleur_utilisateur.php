<?php
function actionUtilisateur($twig, $db){
    $form = array(); 
    $utilisateur = new Utilisateur($db);
    $liste = $utilisateur->select();
    echo $twig->render('index.html.twig', array('form'=>$form,'liste'=>$liste));
}
?>