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
  if (isset($_POST['op1']))
$op1 = $_POST['op1'];
else
$op1 = "";
    if (isset($_POST['op2']))
$op2 = $_POST['op1'];
else
$op2 = "";
  if($op1 != "" && $op2 != ""){
            switch($signe){
                case "plus":
                          $res = $op1 + $op2;
                          echo $res;
                break;
                case "moins" :
                        $res = $op1 - $op2;
                          echo $res;                
                break;
                case "multiplication" :
                          $res = $op1 * $op2;
                          echo $res;                
                break;
                case "division" :
                          $res = $op1 / $op2;
                          echo $res;                
                break;
  }
  }
    
 ?>
  <form method="post" action="calculatrice.php">
    <input type="text" name="op1" id="op1" placeholder="Operand1" value=<?php if (isset($_POST['op1'])) echo $_POST['op1']; else echo "" ?>>
    <select name ="signe">
  <option value="plus">+</option>
  <option  value="moins">-</option>
  <option  value="multiplication">x</option>
  <option  value="division">/</option>
</select>
    <input type="text" name="op2" id="op2" placeholder="Operand2">
    <input type="submit" value="Envoyer">
  </form>

</body>

</html>