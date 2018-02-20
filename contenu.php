<!-- Section à afficher dans l'HTML -->
<section>
 	<form method="post" id="todoList">
 		<h1>A faire</h1>
    	<ul id="sortable">
		<?php 
			if (isset($data["todo"])) {
				foreach ($data["todo"] as $key => $value) {
					//On affiche chacune des taches présente dans le tableau todo du fichier JSON
					?>
					<li class="ui-state-default"><input type="checkbox" name="case[]" value="<?=$value?>"><label for="case"><?=$value?></label></li>
					<?php
				}
			}
		?>
		</ul>
		<input class="button" type="submit" value="Archiver">
	</form>
</section>
<section>
	<form method="post" id="archives">
	  	<h1>Archives</h1>
		<?php 
			/* ON AFFICHE LES ARCHIVES */
			if (isset($data["archives"])) {
				foreach ($data["archives"] as $key => $value) {
					//On affiche chacune des taches présente dans le tableau archive du fichier JSON
					?>
					<p><?=$value?></p>
					<?php
				}
			}
		 ?> 
	 <input class="button" type="submit" name="clean" value="Clean archives">
  </form>	 
</section>