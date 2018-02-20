<?php 
//on load le contenu du JSON
	$json_file = file_get_contents('todo.json');
// on décode le contenu du JSON
	$data = json_decode($json_file, true); 

/* ENCODAGE DES TACHES */
	if(isset($_POST["tache"])) {
		$tache = htmlspecialchars($_POST["tache"]);
	// on ajoute la tache dans le tableau $data
		$data["todo"][] = $tache;
	//Le tableau retourne au format JSON
		$encodage_tableau = json_encode($data, JSON_FORCE_OBJECT|JSON_PRETTY_PRINT);
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
		$encodage_tableau = json_encode($data, JSON_FORCE_OBJECT|JSON_PRETTY_PRINT);
		file_put_contents('todo.json' , $encodage_tableau); 
	}
/* SUPPRIMER LES TACHES ARCHIVEES */
	if (isset($_POST['clean'])) {
	//on nettoie à l'affichage	
		foreach ($data["archives"] as $key => $value) {
			unset($data["archives"][$key]);
		}
	/* On réécrit le tableau todo du fichier JSON */
		$encodage_tableau = json_encode($data, JSON_FORCE_OBJECT|JSON_PRETTY_PRINT);
		file_put_contents('todo.json' , $encodage_tableau); 
	}

/* SAVE LES POSITIONS DANS JSON*/	
	if(isset($_GET['sortPosition'])) {
		$sortPosition = $_GET['sortPosition'];
		$sortPosition = explode(',', $sortPosition);
		$sortPosition = ['top','left'];
	}

?>
<!DOCTYPE html>
<html>
  <head>
  	<title>To do list</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="./assets/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
<body>
	<section>
		<form method="POST" id="todoAddition">
	    	<h1>ToDoList</h1>
			<input class="textTask" type="text" name="tache" placeholder="What do you want to do?" maxlength="50" required>
			<input type="submit" class="button submitTask">
		</form>
	</section>
<?php include 'contenu.php'; ?>
<script type="text/javascript" src="./assets/script.js"></script>
</body>
	
</html>
	