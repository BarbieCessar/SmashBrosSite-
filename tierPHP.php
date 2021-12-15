<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>Super Smash Characters' Tiers</title>
    <link rel="stylesheet" type="text/css" href="style.css"/></head>
    <body> 
     <img src="images/SBHeader.png" alt = "" class="image2"/>
   <ul class="menu">
    
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="gamePHP.php">Games</a></li>
    <li><a href="char.html">Characters</a></li>
    <li>
        <a class = "dropbtn">Tiers Dropdown</a>
        
        <div class ="dropdown"> <a href="tierPHP.php">Tiers</a>
            <a href="VisPage.html">Tiers Visualization</a></div>
        
    </li>
    
</ul>
    
        <h1>Characters' Tiers Based On Game</h1>

            
        <?php
    require_once("config.php");
    $contents = REST_PATH . "/db/smashtiers-queries/tiersforPHPcopy.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
        </table>
    </body>
</html>