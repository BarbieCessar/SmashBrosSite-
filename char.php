
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Every Character in Super Smash Games</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>       
  <ul class="menu">
    
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="gamePHP.php">Games</a></li>
    <li><a href="char.html">Characters</a></li>
    <!--<li><a class = "dropbtn">Tiers Dropdown</a>-->
        <li><a href="tierPHP.php">Tiers</a> </li>
       <li> <a href="VisPage.html">Tiers Visualization</a> </li>
        <!-- <div class ="dropdown"> <a href="tierPHP.php">Tiers</a>
            <a href="VisPage.html">Tiers Visualization</a></div> -->
        
        
    
</ul>
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