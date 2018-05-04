#!/usr/bin/php
<?PHP

function ft_split($s1)
{

	$exploser = explode(' ', $s1);
	$tab = array_filter($exploser);
	sort($tab);
	print_r($tab);
}

?>
