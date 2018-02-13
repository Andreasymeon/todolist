<!-- L'ajout de la tache -->
<?php 
if(isset($_POST["tache"])) {
	$tache = htmlspecialchars($_POST["tache"]);
	$json_file = file_get_contents('todo.json'); //on load le contenu du JSON
	$data = json_decode($json_file, true); // on décode le contenu du JSON
	$data[] = $tache; // on ajoute la tache dans le tableau data
	$ecriture_tache = json_encode($data , JSON_FORCE_OBJECT); //on encode la tache en JSON
	$stock_tache = file_put_contents('todo.json' , $ecriture_tache);
}


?>
<!DOCTYPE html>
<html>
  <head>
  	<title>TP</title>
	<meta charset="UTF-8">
  </head>
<body>
    <h1>ToDoList formulaire</h1>
	<p>To do List</p>
	<form method="POST">
		<input type="text" name="tache" placeholder="What do you want to do?" maxlength="50" required>
		<input type="submit">
	</form>


</body>
</html>