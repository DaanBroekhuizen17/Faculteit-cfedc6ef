<?php
echo("welk getal?");
$n = readline();
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "de faculteit van $n = $x"."\n";
?>