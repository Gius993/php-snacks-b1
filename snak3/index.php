<?php
// Creo array con in cui aggiungere i numeri e un if per far si che non siano presenti
	$numberRandom = [];

	while(count($numberRandom) < 15) {
		$numberGenerated = rand(1,16);
		//condizioni di aggiunta
		if(!in_array($numberGenerated, $numberRandom)){
			$numberRandom[] = $numberGenerated;
		}
	}
	//stampo in pagina
	var_dump($numberRandom);
?>