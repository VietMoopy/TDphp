<!doctype html>
<html>
	<head>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.0/css/bootstrap.min.css" rel="stylesheet" />
	</head>
  
    <?php 
    extract($_POST);
  $present = array("e","es","e","ons","ez","ent");
  $imparfait = array("ais","as","ait","ions","iez","aient");
  $futur = array("ai","as","a","ons","ez","ont");
  $pronom = array("je","tu","il/elle/on","nous","vous","ils/elle")
  
$temps = $_POST['temps'];
foreach ($temps as $untemps){
    foreach($pronom as $unpronom){
        if($untemps == "futur"){
                  echo ($pronom." "$verbe$futur[])
        }
    }
}
 ?>

	<body>
		<div class="container-fluid">
			<form method="post" action="conjuguer.php" class="form-horizontal">
				<fieldset>
					<legend>Conjugaison</legend>
					<div class="control-group">
						<label class="control-label">Verbe du premier groupe</label> 
						<div class="controls">
							<input type=text name="verbe" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Temps</label> 
						<div class="controls">

							<label class="checkbox">present <input type=checkbox name="temps[]" value="present"> </label>
							<label class="checkbox">futur <input type=checkbox name="temps[]" value="futur"> </label>
							<label class="checkbox">imparfait <input type=checkbox name="temps[]" value="imparfait"> </label>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button class="btn" type="submit" name="accepter">Envoyer</button>
						</div>
					</div>
				</fieldset>

			</form>
		</div>
	</body>
</html>
