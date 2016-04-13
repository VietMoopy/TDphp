<!DOCTYPE html>
<html>

<head>
  <title>Ceci est une page de test avec des balises PHP</title>
  <meta charset="utf-8" />
  <style>

  </style>
</head>

<body>
  <?php 
    extract($_POST);
  if (isset($_POST['table']))
$table = $_POST['table'];
else
$table = "";
  if($table != ""){
    echo ("Table de ".$table);
        echo ("<br>");
  for($i = 1; $i < 11; $i++){
    $resultat = $table*$i;
    echo ($table." x ".$i." = ".$resultat);
    echo ("<br>");
  }
  } 
 ?>
  <form method="post" action="multiplication.php">
    <label></label>
    <input type="text" name="table" id="table">
    <input type="submit" value="Envoyer">
  </form>  

</body>

</html>