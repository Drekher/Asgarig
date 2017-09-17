<?php
use Application\Controller\PersonnageController;

$params = $this->getParams();
if(empty($params))
{
    trigger_error('ERREUR DETECTEE LORS DE LA CREATION DE LA SESSION',E_USER_ERROR);
}
?>
<main>
<div class="container">
	<div class="row">
		<div class="content">
			<div class="col-xs-12 col-md-9">
						<?php
    if (PersonnageController::hasPersonnage($params)) {
        ?>
						<h3>Bienvenue <?= $params['personnage']->nom;?> </h3>
				<p>Un tremblement de terre qui secoue une région désertique, un non
					phénomène me diriez vous ?</p>
				<p>Vous auriez sans doute raison, si celui ci n'avait pas ouvert les
					entrailles de la terre, laissant une grotte remplie de richesse...
				</p>
				<p>La cupidité humaine est telle que dès lors, des milliers de
					personnes de la Guilde du Loot ont été missionnées pour exploiter
					cette richesse inespérée.</p>
				<p>L'histoire aurait pu s'arrêter là, si les troupes de la Guilde ne
					s'étaient pas mis à disparaitre les uns après les autres.. Les cris
					qui résonnent ne laissent peu de doute quant au sérieux de la
					situation.</p>
				<p>Vous avez reçu votre ordre de mission qui vous emmene dans les
					souterrains d'Asgarig en quête de richesse et d'explications...</p>
				<!-- Checker le niveau de l'exploration : champ ETAGE -->
				<a href=#> Commencer l'exploration des souterrains.</a>
						<?php }
  #Si on a pas de personnage on propose d'en créer un autre
	else
	{
	?>
	    
	<p> Vous n'avez pas de personnage mais il est encore temps d'en créer un :  <a href="#">Créer un personnage</a>    
	    <?php 
	}
		?>
						</div>
			<div class="col-md-3 hidden-xs aside">ASIDE</div>
		</div>
	</div>
</div>
</main>