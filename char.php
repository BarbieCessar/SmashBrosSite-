
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Every Character in Super Smash Games</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>       
    <ul class="stuff">
    
         <li><a href="index.html" class="stuff">Home</a></li>
    	   <li><a href="about.html">About</a></li>
            <li><a href="GameList.html">Games</a></li>
            <li><a href="char.html">Characters</a></li>
            <li><a href="tiers.html">Tiers</a></li>
        <li><a href="GamePHP.php">Test</a></li>
        </ul> 
        <?php
    require_once("config.php");
    $contents = REST_PATH . "/db/smashtiers-queries/charByTier.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
</table>
    </body>
</html>