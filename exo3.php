<?php

#algoExoQais
#beweb lunel


$result = 0;
$i = 0;
function countLetter($word,$letter)
{
	$result = 0;
	$i = 0;
	$argv[1] = $word;
	$argv[2] = $letter;
	while($i < strlen($word))
	{
		if($word[$i] == $letter)
		{
			$result++;
		}
	$i++;
	}
	echo "le nombre de $letter est : $result\n";
}
countLetter($argv[1], $argv[2])
?>
