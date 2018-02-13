<!-- contenu afficher -->
<section>
    <h1>A faire</h1>
    <form method="post">
    		<ul>
				<?php 

					$json_file = file_get_contents('todo.json'); //on load le contenu du JSON
					$data = json_decode($json_file, true); // on décode le contenu du JSON

					if (isset($data	) ) {
						foreach ($data as $key => $value) {
							//On affiche chacune des taches présente dans le fichier JSON
							echo '<li><input type="checkbox" name="case[]" value='.$value.'><label for="case">'.$value.'</label></li>';
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

	if (isset($_POST['case'])){
		$archive_array = $_POST['case'];
			if (empty($archive_array)) {
				echo "Tu n'as rien à archiver";
			}
			else {
				for ($i=0; $i < count($archive_array); $i++) { 
					echo $archive_array[$i]."<br>"; //afficher les taches "checked"
				}
			}
	}
 ?>
   
    
</section>