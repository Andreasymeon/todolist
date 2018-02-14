<?php 
//on load le contenu du JSON
$json_file = file_get_contents('todo.json');
// on décode le contenu du JSON
$data = json_decode($json_file, true); 

/*ENCODAGE DES TACHES EN JSON*/
	if(isset($_POST["tache"])) {
		$tache = htmlspecialchars($_POST["tache"]);
	// on ajoute la tache dans le tableau $data
		$data["todo"][] = $tache;
	//Le tableau retourne au format JSON
		$encodage_tableau = json_encode($data, JSON_FORCE_OBJECT);
	//On ajout le tableau dans le fichier JSON
		file_put_contents('todo.json' , $encodage_tableau);
		}

/* ARCHIVAGE DES TACHES */
	/*On encode les taches "check" dans le tableau archives du fichier JSON*/
	if (isset($_POST['case'])){
		$archives = $_POST['case'];
	// on ajoute les taches cochées dans le tableau archives de $data
		foreach ($archives as $key => $value) {
			$data["archives"][] = $value;
		}
	/* On réécrit le tableau todo du fichier JSON */
	//On écrase le premier tableau en comparant $archives avec l'ancien "todo"
		$data["todo"] = array_diff( $data["todo"] , $archives);			
		$encodage_tableau = json_encode($data, JSON_FORCE_OBJECT);
		file_put_contents('todo.json' , $encodage_tableau); 
	}
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>To do list</title>
	<meta charset="UTF-8">
  </head>
<body>
    <h1>ToDoList</h1>
		<form method="POST">
			<input type="text" name="tache" placeholder="What do you want to do?" maxlength="50" required>
			<input type="submit">
		</form>

<?php include 'contenu.php'; ?>

</body>
</html>