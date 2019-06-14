<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reverse String</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>
<?php
$output = '';
if(!empty($_POST) && isset($_POST['string'])){  
    $string = trim($_POST['string']);
    $array = str_split($string);
    foreach ($array as $i => $value) {
        echo $output = $value.$output;
        echo '<br>';
    }
    $output = 'Reverse of "'. trim($_POST['string']) . '" is: "' . $output . '"';
}
?>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="<?php echo $_SERVER[REQUEST_URI];?>" method="POST">
            <span class="contact100-form-title">
                Reverse String
            </span>
            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Enter String</span>
                <input class="input100" type="text" name="string" placeholder="Enter Value">
            </div>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Reverse
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