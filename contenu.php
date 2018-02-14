<!-- Section à afficher dans l'HTML -->
<section>
  <h1>A faire</h1>
 	<form method="post">
    <ul>
		<?php 
			if (isset($data["todo"])) {
				foreach ($data["todo"] as $key => $value) {
					//On affiche chacune des taches présente dans le tableau todo du fichier JSON
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
		/* ON AFFICHE LES ARCHIVES */
			if (isset($data["archives"])) {
				foreach ($data["archives"] as $key => $value) {
					//On affiche chacune des taches présente dans le tableau archive du fichier JSON
					?>
					<p style="text-decoration: line-through; color: grey;"><?=$value?></p>
					<?php
				}
			}
	 ?> 
</section>