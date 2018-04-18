<?php

calcString();


function calcString()
{
	if(!isset($_POST['string']) || strlen($_POST['string']) == 0){
		echo "string is empty";
	}

	$string = $_POST['string'];
	$maxLength = 1;
	$oldMaxString = $string[0];
	$allLangth = strlen($string);
	$newLine = $string[0];

	for ($i = 0; $i < $allLangth - 1; $i++) {
		$characterCode = ord($string[$i]);
		$nextcharacterCode = ord($string[$i+1]);
		if (($nextcharacterCode - $characterCode) == 1) {
			$newLine .= $string[$i+1];
			$maxLength ++; 
			if (strlen($newLine) > strlen($oldMaxString)) {
				$oldMaxString = $newLine;
			}
		} else {
			$newLine = $string[$i];
			if (strlen($newLine) > strlen($oldMaxString)) {
				$oldMaxString = $newLine;
				$maxLength = strlen($oldMaxString);
			}else{
				$newLine = $string[$i+1];
				$maxLength = 1;
			}

		}

	}

	echo "Original string <br>";
	echo $string . "<br>";
	echo "final string " . $oldMaxString . "<br>";
	echo "final string's length " . strlen($oldMaxString) . "<br>";
	
}