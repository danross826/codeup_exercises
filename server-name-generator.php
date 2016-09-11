<?php



function serverGenerator(){
	$adjectives=["bad", "good", "long", "little", "awesome", "anarchic", "flaming", "frosting", "shocking"];

	$nouns=["hydra", "orc", "fairy", "dragon", "ghoul", "owlbear", "gorgon", "elf", "demon", "roper"];

	$randAdjective=array_rand($adjectives, 1);

	$randNouns=array_rand($nouns, 1);

	$data = array('randAdjective' =>$randAdjective ,'randNouns'=>$randNouns );

	return $data;

	}

	extract(serverGenerator());

echo $randAdjective . " " . $randNouns;

