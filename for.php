<?php





do{
fwrite(STDOUT, "Please give a starting number.");
$startNumber=trim(fgets(STDIN));
if (!is_numeric($startNumber)) {
	fwrite(STDOUT, "Error: Not a number.");
}
}while (!is_numeric($startNumber));


do{
fwrite(STDOUT, "Please give an ending number.");
$endNumber=trim(fgets(STDIN));
if (!is_numeric($endNumber)) {
	fwrite(STDOUT, "Error: Not a number.");
}
}while (!is_numeric($endNumber));

do{
fwrite(STDOUT, "Please give the increment you want it to increase");
$increment=trim(fgets(STDIN));
if ($increment=="") {
	$increment=1;
}
if (!is_numeric($increment)) {
	fwrite(STDOUT, "Error: Not a number.");
}
}while (!is_numeric($increment));



for ($i=$startNumber; $i <= $endNumber; $i=$i+$increment) { 
	echo $i . PHP_EOL;
}


?>