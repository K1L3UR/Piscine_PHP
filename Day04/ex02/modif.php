<?php
$filename = "../private/passwd";
if ($_POST["submit"] === "OK" && ($_POST["login"] != NULL) && ($_POST["oldpw"] != NULL) 
    && file_exists($filename) && ($_POST["newpw"] != NULL))
{
    $tab_user = array();
    $tab_user = unserialize(file_get_contents($filename));
    foreach ($tab_user as $key => $elem)
    {
        if ($elem["login"] === $_POST["login"])
        {
            if ($elem["passwd"] == hash("whirlpool", $_POST["oldpw"]))
                if ($elem["passwd"] == hash("whirlpool", $_POST["newpw"]))
                    {
                        echo "ERROR\n";
                        return (0);
                    }
            else
            {
                $tab_user[$key]["passwd"] = hash("whirlpool", $_POST["newpw"]);
                file_put_contents($filename, serialize($tab_user));
                echo "OK\n";
                return (1);
            }
        }
    }
}
echo "ERROR\n";
?>