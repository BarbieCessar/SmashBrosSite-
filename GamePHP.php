<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>The Games the Characters Are In</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
     <script src="BeginnerJScriptFor_GAME_list.js">/**/</script>
    </head>
    <body> 
      <ul class="stuff">
    
         <li><a href="index.html" class="stuff">Home</a></li>
    	   <li><a href="about.html">About</a></li>
            <li><a href="GameList.html">Games</a></li>
            <li><a href="char.html">Characters</a></li>
            <li><a href="tiers.html">Tiers</a></li>
        </ul>
    <button class="button">I Hide SSB1 Results </button><br>
    <button class="button">I Hide SSBM Results </button><br>
    <button class="button">I Hide SSBB Results </button><br>
    <button class="button">I Hide SSB4 Results </button><br>
    <button class="button">I Hide SSBU Results </button><br>
    <button class="button">I Show SSB1 Results </button><br>
    <button class="button">I Show SSBM Results </button><br>
    <button class="button">I Show SSBB Results </button><br>
    <button class="button">I Show SSB4 Results </button><br>
    <button class="button">I Show SSBU Results </button><br>
        <h1>Super Smash Bros Characters and the Games They Are In</h1>
            
        <?php
    require_once("config.php");
    $contents = REST_PATH . "/db/smashtiers-queries/GameList.xql";
    $result = file_get_contents($contents);
    echo $result;
?>
        </table>
    </body>
</html>