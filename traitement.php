<?php
extract($_POST);

$nomModifie =  ucfirst (strtolower($nom));
$prenomModifie =  ucfirst (strtolower($prenom));

if($sexe == "femme")
  echo ("Bonjour Madame ");
else
  echo("Bonjour Monsieur ");
echo ($prenomModifie." ".$nomModifie);
?>