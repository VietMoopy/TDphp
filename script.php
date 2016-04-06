<!DOCTYPE html>
<html>

<head>
  <title>Ceci est une page de test avec des balises PHP</title>
  <meta charset="utf-8" />
  <style>
    .rouge
    {
      background-color: red;    
    }
  </style>
</head>

<body>
  <h2>Page de test</h2>

  <p>
    Cette page contient du code HTML avec des balises PHP.<br />
    Voici quelques petits tests :
  </p>

<table border = 1>
<thead><tr><th>Data</th></tr></thead>
<tbody>
 <tr>
   <td><b>Nom</b></td>
  <td><b>Prenom</b></td>
   <td><b>E-mail</b></td>
   <td><b>Taille</b></td>
   <td><b>Poids</b></td>
   <td><b>IMC</b></td>
 </tr>
<?php include 'data.php'; ?>
<?php foreach ($data as $value) : ?>
  <?php $imc = $value["Poids"]/(($value["Taille"]/100)*($value["Taille"]/100)); $imc=round($imc,2); if($imc > 25){ ?>
    <tr class = "rouge">
  <?php } ?>
  <?php $imc = $value["Poids"]/(($value["Taille"]/100)*($value["Taille"]/100)); $imc=round($imc,2); if($imc <= 25){ ?>
    <tr>
  <?php } ?>
  <?php foreach($value as $valeur) : ?>
    <td><?= htmlspecialchars($valeur) ?></td>
  <?php endforeach ?>
    <td > <?php $imc = $value["Poids"]/(($value["Taille"]/100)*($value["Taille"]/100)); echo round($imc,2); ?> </td>
  </tr>
<?php endforeach ?>
</tbody>
</table>
</body>

</html>     