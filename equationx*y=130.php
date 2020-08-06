<?php
$n = 130;
for ($x = 1; $x <= $n; $x++) {
    for($y = 1;$y <= $n;$y++){
        $a = $x * $y;
        if($a == 130){
            echo "satisfying the equation $x * $y = 130<br>";
        }
    }
}
?>
//Output
Equation value of x & y 1 * 130 = 130
Equation value of x & y 2 * 65 = 130
Equation value of x & y 5 * 26 = 130
Equation value of x & y 10 * 13 = 130
Equation value of x & y 13 * 10 = 130
Equation value of x & y 26 * 5 = 130
Equation value of x & y 65 * 2 = 130
Equation value of x & y 130 * 1 = 130
