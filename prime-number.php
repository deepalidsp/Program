<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prime Number</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>
<?php
$output = '';
if(!empty($_POST) && isset($_POST['number'])){  
    $num = $_POST['number'];
    
    $flag = true;
    for($x=2; $x<$num; $x++){
        if($num%$x == 0){
            $flag = false;
        }
        if(!$flag){
            break;
        }
    }

    $prime = 'Not Prime';
    if($flag){
        $prime = 'Prime';
    }
    $output = 'Number '. $num . ' is: '. $prime;
}
?>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="<?php echo $_SERVER[REQUEST_URI];?>" method="POST">
            <span class="contact100-form-title">
                Prime Number
            </span>
            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Enter Number</span>
                <input class="input100" type="text" name="number" placeholder="Enter Number">
            </div>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Check
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