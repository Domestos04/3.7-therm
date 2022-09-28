<?php
print "<table style=\"border:solid;\">";
    $t = rand(-20, 20);
for ($i = 20; $i > -21; $i--) {
    if($t > $i){
        $style = 'width:30px;background:red';
    }
    else{
        $style = 'width:30px;background:yellow';
    }
    //echo ($style = ($t > $i));
    
    //echo ($style = ($t < $i));
    
    print "<tr><td style=\"border:solid;\">$i</td><td style= \"$style\" \"border:solid;\" width=\"30\" height=\"50\"></td></tr>";
    
}
print "</table>";