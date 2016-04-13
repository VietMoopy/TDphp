<?php
extract($_POST);
$score =  0;
for($i = 1; $i <= $nbq; $i++){
  $reponse =  $_POST['question'.$i];
  if($reponse == "vrai"){
    echo ("Question ".$i.": Bonne reponse");
    echo "<br>";
    $score++;
  }
  else{
    echo ("Question ".$i.": Mauvaise reponse");
    echo "<br>";
  }
}
echo ("Score : ".$score);
?>