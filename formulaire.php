<!-- L'ajout de la tache -->
<?php 

/*On encode les taches dans le tableau todo du fichier JSON*/
if(isset($_POST["tache"])) {
	$tache = htmlspecialchars($_POST["tache"]);
	$json_file = file_get_contents('todo.json'); //on load le contenu du JSON
	$data = json_decode($json_file, true); // on décode le contenu du JSON
	$data["todo"][] = $tache; // on ajoute la tache dans le tableau data
	$ecriture_tache = json_encode($data, JSON_FORCE_OBJECT); //on encode la tache en format JSON
	$stock_tache = file_put_contents('todo.json' , $ecriture_tache); //rajouter dans le fichier JSON
}

?>
<!DOCTYPE html>
<html>
  <head>
  	<title>TP</title>
	<meta charset="UTF-8">
  </head>
<body>
    <h1>ToDoList</h1>
	<p>To do List</p>
	<form method="POST">
		<input type="text" name="tache" placeholder="What do you want to do?" maxlength="50" required>
		<input type="submit">
	</form>

<?php include 'contenu.php'; ?>

</body>
</html>