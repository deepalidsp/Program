<?php
$num=8208;
# Gandhi number eg:0,1,1634,8208,9474. 
/*
  1634  = (1^4)+(6^4)+(3^4)+(4^4)
        = 1 + 1296 + 81 + 256
  1634  = 1634
*/
$total=0;  
$x=$num;  
while($x!=0)  
{  
  $rem=$x%10;  
  $total=$total+$rem*$rem*$rem*$rem;  
  $x=$x/10;  
}  
if($num==$total)  
{  
  echo "$num is an Gandhi number<br>";  
}  
else  
{  
  echo "$num is not an Gandhi number<br>";  
}
?>
//Output
8208 Yes it is an Gandhi number