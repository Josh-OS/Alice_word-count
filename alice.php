

 <?php

//attatch file content
$alice = file_get_contents('alice.txt');

//lower case all alphabet
$alice = strtolower($alice);

// special character dropper
$alice = preg_replace("/[^a-z0-9 ]/i", ' ', $alice);


$ray = str_word_count($alice, 2);

$varray = array_count_values($ray);


foreach($varray as $key => $value){
	echo "$key = $value \n";
}




?>