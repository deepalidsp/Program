<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fibonacci series</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>
<?php
$lim = 0;
$series = '';
$output = '';
if(!empty($_POST) && isset($_POST['number'])){  
    $first = 0;
    $second = 1;
    $lim = $_POST['number'];  
    $num = 0;
    while ($num < $lim - 2 ){
        if(!$num){
            $series .=  $first . ' ' . $second . ' ';    
        }
        $add = $first + $second;
        $series .=  $add . ' ';
        $first = $second;
        $second = $add;
        $num++;

    }
    $output = 'Fibonacce series upto '. $lim . ' is: '. trim($series);
}
?>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="<?php echo $_SERVER[REQUEST_URI];?>" method="POST">
            <span class="contact100-form-title">
                Fibonacci series
            </span>
            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Enter Limit Number</span>
                <input class="input100" type="text" name="number" placeholder="Enter Number">
            </div>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Submit
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
        <br>
        <h2 class="output"><?php echo $output; ?></h2>
    </div>
</div>
</body>
</html>