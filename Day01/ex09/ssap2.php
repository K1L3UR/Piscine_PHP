#!/usr/bin/php
<?PHP

function ft_sort_personnal($a, $b)
	{
		$order = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t",
				"u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", " ", "!", "\"", "#", "$", "%", "&", 
				"'", "(", ")", "*", "+", ",", "-", ".", "/", ":", ";", "<", "=",">", "?", "@", "[", "\\", "]", "^", "_", "`", "{",
				"|", "}", "~", ")");
		$i = 0;
		while ($a[$i] || $b[$i])
		{
			$res1 = array_search(strtolower($a[$i]), $order);
			$res2 = array_search(strtolower($b[$i]), $order);
			if ($res1 > $res2)
				return 1;
			elseif ($res1 < $res2)
				return -1;
			$i++;
		}
		return (0);
	}

	$tab = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$array = $argv[$i];
		$array = preg_replace('/\s\s+/', ' ', $array);
		$array = explode(" ", $array);
		$tab = array_merge($tab, $array);
	}
	usort($tab, "ft_sort_personnal");
	if ($argc >1)
	{
		echo implode("\n" ,$tab)."\n";	
	}

?>
