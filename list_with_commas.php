<?php


// Converts array into list n1, n2, ..., and n3

 function humanizedList($array) {
   return implode(',', $array);
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);



function alphabetizeArray($array,$boolean=false){
	if ($boolean) {
		sort($array);
		return $array;
	}

}





 // Humanize that list
 $famousFakePhysicists=humanizedList(alphabetizeArray($physicistsArray,true));


 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";


































?>