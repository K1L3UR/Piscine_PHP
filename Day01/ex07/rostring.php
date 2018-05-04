#!/usr/bin/php
<?PHP

if ($argv[1] != NULL)
{
	$exploser = explode(' ', $argv[1]);
	$s1 = array_filter($exploser);
	foreach (array_slice($s1, 1)as $word)
	{
		echo "$word"." ";
	}
	echo "$s1[0]"."\n";
}

?>
