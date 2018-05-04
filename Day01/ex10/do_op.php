#!/usr/bin/php
<?PHP
if ($argc == 4)
	{
		$num1 = trim($argv[1]);
		$signe = trim($argv[2]);
		$num2 = trim($argv[3]);
		if ($signe == '+')
		{
			$result = $num1 + $num2;
			echo "$result\n";
		}
		elseif ($signe == '-')
		{
			$result = $num1 - $num2;
			echo "$result\n";
		}
		elseif ($signe == '/')
		{
			$result = $num1 / $num2;
			echo "$result\n";
		}
		elseif ($signe == '*')
		{
			$result = $num1 * $num2;
			echo "$result\n";
		}
		elseif ($signe == '%')
		{
			$result = $num1 % $num2;
			echo "$result\n";
		}
	}
	else
	{
		echo "Incorrect Parameters\n";
	}
?>
