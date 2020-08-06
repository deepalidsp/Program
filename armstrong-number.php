<?php  
$num=407;  
// eg:0,1,153,370,371,407 are Aemstrong Number
/*
    407 = (4*4*4) + (0*0*0) + (7*7*7)  
        = 64 + 0 + 343  
    407 = 407   
*/
$total=0;  
$x=$num;  
while($x!=0)  
{  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
}  
if($num==$total)  
{  
    echo "Yes it is an Armstrong number";  
}  
else  
{  
    echo "No it is not an armstrong number";  
}  
?>

//Ouput:
Yes it is an Armstrong number