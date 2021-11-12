<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>The Games the Characters Are In</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="BeginnerJScriptFor_GAME_list.js">/**/</script>
    </head>
    <body> 
    <ul class="stuff">
    
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="gamePHP.php">Games</a></li>
    <li><a href="char.html">Characters</a></li>
    <li><a href="tierPHP.php">Tiers</a></li>
    
</ul>    
    <button class="button" onclick="toggle">Toggle Hide/Show SSB1 Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSBM Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSBB Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSB4 Results </button><br>
    <button class="button"  onclick="toggle">Toggle Hide/Show SSBU Results </button><br>
   
        <?php
    require_once("config.php");
    $contents = REST_PATH . "/db/smashtiers-queries/GameList.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
        </table>
    </body>
</html>
