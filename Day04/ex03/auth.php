<?php
function auth($login, $passwd)
{
	$filename = "../private/passwd";
	$tab_user = array();
    $tab_user = unserialize(file_get_contents($filename));
    $pass = hash("whirlpool", $passwd);
    foreach ($tab_user as $elem)
    {
    	print_r($elem);
        if ($elem["login"] === $login && $elem["passwd"] === $pass)
        {
            return (true);
        }
    }
	return (false);
}
?>