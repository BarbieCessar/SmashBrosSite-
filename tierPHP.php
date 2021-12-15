<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>Super Smash Characters' Tiers</title>
    <link rel="stylesheet" type="text/css" href="style.css"/></head>
<<<<<<< HEAD
    <body> 
     <img src="images/SBHeader.png" alt = "" class="image2"/>
   <ul class="menu">
=======
    <body>
     <img src="images/SBHeader.png" class="image2"/>
    <ul class="menu">
>>>>>>> 6ed80131bbbe1a9952d3963b60293121433e7e36
    
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="gamePHP.php">Games</a></li>
    <li><a href="char.html">Characters</a></li>
<<<<<<< HEAD
    <li>
        <a class = "dropbtn">Tiers Dropdown</a>
        
        <div class ="dropdown"> <a href="tierPHP.php">Tiers</a>
            <a href="VisPage.html">Tiers Visualization</a></div>
        
    </li>
    
=======
    <li><a href="tierPHP.php">Tiers</a></li>
     <li> <a href="VisPage.html">Tiers Visualization</a> </li>
>>>>>>> 6ed80131bbbe1a9952d3963b60293121433e7e36
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