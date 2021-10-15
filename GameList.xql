

xquery version "3.1";

<html>
    <head><title>YGame the Charecters are in</title></head>
    
<body>
    <h1>SmashBro charecters and the games they are in</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Game</th>
            <th>Tier</th>
            
            </tr>
{
let $charList := doc('/db/smashtiers/supersmashtierlist.xml')
let $names:= $charList//char ! string(@id)
for $n in $names
let $game := $charList//char[@id=$n]/game/@n ! data() =>distinct-values()
let $stringjoin := string-join($game,':')
for $g in $game
let $tier := $charList//game[@n=$g]/@tier ! string 
let $string := string-join($tier,':')

return 
    
    <tr>
        <td>{$n}</td>
        <td>
            <ul>
                {
               for $g in $game
               let $gn := 
               if ($g=1)
                   then 'Super Smash Bros'
                else if ($g=2)
                    then 'Super Smash Bros Melee'
                else if ($g=3)
                    then 'Super Smash Bros Brawl'
                else if ($g=4)
                    then 'Super Smash Bros Four'
                else 'Super Smash Bros Ultimate'
               
                return
                  <li>{$gn}</li>
            }
            </ul> 
        </td>
        <td>
            <ul>{
                (:for $g in $game:)
                for $t in $tier
                let $tn := 
               if($t=A)
                    then 'A'
                    else 'test'
                return 
                    <li>{$tn}</li>
            }
            
            </ul>
        </td>
     
    </tr>
}

</table>
</body>
</html>