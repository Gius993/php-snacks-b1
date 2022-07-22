<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		//creo array
		$arraySquadre = [
			[
				'casa' => 'Olimpo',
				'ospite' => 'Ade',
				'punti' => [
					'28','45'
					]
			],

			[
				'casa' => 'Olimpo',
				'ospite' => 'Tartaro',
				'punti' => [
					'28','47'
					]
			],
			[
				'casa' => 'Ade',
				'ospite' => 'Ascoli',
				'punti' => [
					'48','445'
					]
			],
		];
			
	?>
	<!-- creo il ciclo e stampo-->
	<h2>Partite</h2>
	<ul>
		<?php for($i = 0; $i < count($arraySquadre); $i++){ ?>
			<?php  $arrayTeams = $arraySquadre[$i]; ?>
			<li>
				<span><?php echo $arrayTeams['casa']; ?></span>
				<span>-<?php echo $arrayTeams['ospite']; ?></span>
				<span>punteggio casa - <?php echo $arrayTeams['punti'] [0]; ?></span>
				<span>punteggio ospiti - <?php echo $arrayTeams['punti'] [1]; ?></span>
			</li>
		<?php } ?>
	</ul>
</body>
</html>