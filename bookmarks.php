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
<thead><tr><th>Bookmarks</th></tr></thead>
<tbody>
 <tr>
   <td><b>Site</b></td>
  <td><b>Journaux</b></td>
 </tr>
<?php $repertoire = array("Moteurs" => array(("Google" => ("http://www.google.fr", image)),array("Yahoo"=> array("http://www.yahoo.fr",image))), 
                          "Journaux" => array(("LeMonde" => ("http://www.lemonde.fr", image)),array("Linux"=> array("http://www.editions-diamond.fr/category/gnu-linux-magazine",image))), 
                          "Sports" => array(("FFF" => ("http://www.fff.fr", image)),array("Eurosport"=> array("http://www.eurosport.fr",image))) ?>
  <?php foreach($repertoire as $valeur) : ?>
    <td><?= htmlspecialchars($valeur) ?></td>
  <?php endforeach ?>
  </tr>
<?php endforeach ?>
</tbody>
</table>
</body>

</html>     