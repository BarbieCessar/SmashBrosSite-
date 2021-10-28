<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>Super Smash Characters' Tiers</title></head>
    <body> 
        <h1>Characters' Tiers Based On Game</h1>
            
        <?php
    require_once("config.php");
    $contents = REST_PATH . "/db/smashtiers-queries/tiersforPHP.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
        </table>
    </body>
</html>