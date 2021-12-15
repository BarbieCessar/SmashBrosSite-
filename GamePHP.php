<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>The Games the Characters Are In</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="BeginnerJScriptFor_GAME_list.js">/**/</script>
    </head>
    <body> 
<<<<<<< HEAD
    <img src="images/SBHeader.png" alt = "" class="image2"/>
    
    <ul class="menu">
=======
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
        <li><a href="tierPHP.php">Tiers</a> </li>
       <li> <a href="VisPage.html">Tiers Visualization</a> </li>
>>>>>>> 6ed80131bbbe1a9952d3963b60293121433e7e36
    
</ul>
      
    <div class = "button"> <button class="button" onclick="toggle">Toggle Hide/Show SSB1 Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSBM Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSBB Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSB4 Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSBU Results </button><br></div>
  <input id="searchbar" onkeyup="search_char()" type="text"
        name="search" placeholder="Search for Characters..">
        <?php
    require_once("config.php");
    $contents = REST_PATH . "/db/smashtiers-queries/GameList.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
        </table>
    </body>
</html>
