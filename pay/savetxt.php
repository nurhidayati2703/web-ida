<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "{keyid:1,merch}";
fwrite($myfile, $txt);
//$txt = "Jane Doe\n";
//fwrite($myfile, $txt);
fclose($myfile);
?>