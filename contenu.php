<!-- contenu afficher -->
<?php 
$json_file = file_get_contents('todo.json'); //on load le contenu du JSON
$data = json_decode($json_file, true); // on décode le contenu du JSON
?>

<section>
    <h1>A faire</h1>
    <form method="post">
    		<ul>
				<?php 

					if (isset($data["todo"])) {
						foreach ($data["todo"] as $key => $value) {
							//On affiche chacune des taches présente dans le fichier JSON
							?>
							<li><input type="checkbox" name="case[]" value="<?=$value?>"><label for="case"><?=$value?></label></li>
							<?php
						}
					}
				?>
			</ul>
		<input type="submit" value="Archiver">
	</form>
</section>
<section>
    <h1>Archive</h1>

<?php 
/* ON ARCHIVE LES DONNES */

	/*On encode les taches check dans le tableau archives du fichier JSON*/
	if (isset($_POST['case'])){
		$archives = $_POST['case'];

		foreach ($archives as $key => $value) {
			$data["archives"][] = $value;

						// foreach ($data["todo"] as $key => $value) {
						// 	if ($value !== $data["archives"][$key]) {
						// 		///////////
						// 	}
						// }

					// }


		};  // on ajoute la tache dans le tableau data
		$A = array_diff( $data["todo"] , $archives);			
		var_dump($archives);
		var_dump($data["todo"]);
		var_dump($A);
		$ecriture_tache = json_encode($data, JSON_FORCE_OBJECT); //on encode la tache en format JSON
		$stock_tache = file_put_contents('todo.json' , $ecriture_tache); //rajouter dans le fichier JSON

	};

	/* ON AFFICHE LES ARCHIVES */
		

		if (isset($data["archives"])) {
			foreach ($data["archives"] as $key => $value) {
				//On affiche chacune des taches présente dans le fichier JSON
				?>
				<p style="text-decoration: line-through; color: grey;"><?=$value?></p>
				<?php
			}
		}
 ?> 
</section>