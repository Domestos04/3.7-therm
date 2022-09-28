<?php
print "<table style=\"border:solid;\">";
for ($i = 20; $i > -21; $i--) {
    $t = rand(-20, 20);
    if($t > $i){
        $style = 'width:30px;background:red';
    }
    else{
        $style = 'width:30px;background:yellow';
    }
    //echo ($style = ($t > $i));
    
    //echo ($style = ($t < $i));
    
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"border:solid;\" width=\"30\" height=\"50\" \"{$style}\"></td></tr>";
    
}
print "</table>";