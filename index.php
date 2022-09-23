<?php
print "<table style=\"border:solid;\">";
for ($i = 20; $i > -21; $i--) {
    $t = rand(-20, 20);
    if($t > $i);
    else($t < $i);
    echo ($style = ($t > $i));
    echo ($style = ($t < $i));
    
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"border:solid;\" width=\"30\" height=\"100\" style=\"{$style}\" width=\"30\" \"background:red;\" \"width:30\" \"background:yellow;\"></td></tr>";
    
}
print "</table>";