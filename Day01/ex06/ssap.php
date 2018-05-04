#!/usr/bin/php
<?PHP

function ft_split($s1)
{
	$exploser = explode(' ', $s1);
	$tab = array_filter($exploser);
	sort($tab);
	foreach($tab as $line)
		echo $line."\n";
}

function epur_str($ssap)
{
	$s1 = trim($ssap);
	while ($s1 != str_replace('  ', ' ', $s1))
		$s1 = str_replace('  ', ' ', $s1);
		return ($s1);
}

foreach (array_slice($argv, 1) as $elem)
{
	$tab = epur_str($elem);
	if ($tab2)
		$tab2 = $tab2.' '.$tab;
	else
		$tab2 = $tab;	
}
ft_split($tab2);
?>
