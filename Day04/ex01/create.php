<?php
$filename = "../private/passwd";
if ($_POST["submit"] === "OK" && ($_POST["login"] != NULL) && ($_POST["passwd"] != NULL))
{
    $tab_user = array();
    if (!(file_exists($filename)))
    {
        mkdir("../private", 0777, true);
        file_put_contents($filename, "");
    }
    else 
        $tab_user = unserialize(file_get_contents($filename));
    foreach ($tab_user as $login)
    {
        if ($login["login"] === $_POST["login"])
        {
            echo "ERROR\n";
            return (0);
        }
    }
    $user["login"] = $_POST["login"];
    $user["passwd"] = hash("whirlpool", $_POST["passwd"]);
    $tab_user[] = $user;
    file_put_contents($filename, serialize($tab_user));
    echo "OK\n";
}   else
        echo "ERROR\n";
?>