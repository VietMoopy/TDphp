<?php
extract($_POST);
$score =  0;
$compteur = 0;

for($i = 1; $i <= $nbq; $i++){
    if (isset($_POST['question'.$i]))
$reponse = $_POST['question'.$i];
else
$reponse = "";
  if($reponse == "vrai"){
    echo ("Question ".$i.": Bonne reponse");
    echo "<br>";
    $score++;
  }
  else if($reponse == ""){
    echo ("Question ".$i.": Pas repondu");
    echo "<br>";
  }
  else{
    echo ("Question ".$i.": Mauvaise reponse");
    echo "<br>";
  }
}

echo ("Score : ".$score);
?>