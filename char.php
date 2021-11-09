<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Every Character in Super Smash Games</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>        
        <?php
    require_once("config.php");
    $contents = REST_PATH . "  /db/smashtiers/characterTiersWithoutGames.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
    </body>
</html>