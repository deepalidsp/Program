<!DOCTYPE html>
<html lang="en">
<head>
    <title>Find second heighest number in array</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>
<?php
$output = '';
if(!empty($_POST) && isset($_POST['number'])){  
    $string = str_replace(' ', '', $_POST['number']);
    $array = array_values(array_filter(explode(',', $string)));
    $highest_1 = $highest_2 = 0;
    $array_string = '(';
    for($i=0; $i<count($array); $i++){
        if($array[$i] > $highest_1){
            $highest_2 = $highest_1;
            $highest_1 = $array[$i];
        }else if($array[$i] > $highest_2){
            $highest_2 = $array[$i];
        }
        $array_string .= $array[$i] . ',';
    }
    $array_string = rtrim($array_string,',') . ')';
    $output = "Second heighest number from array ". $array_string ." is: " . $highest_2;
}
?>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="<?php echo $_SERVER[REQUEST_URI];?>" method="POST">
            <span class="contact100-form-title">
                Find second heighest number in array
            </span>
            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Enter comma separated numbers</span>
                <input class="input100" type="text" name="number" placeholder="Enter Value">
            </div>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Find 
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
        <br>
        <h2 class="output" style="text-align:left;"><?php echo $output; ?></h2>
    </div>
</div>
</body>
</html>