<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <style>
    [ FONT ]*/

    @font-face {
    font-family: Montserrat-Regular;
    src: url('../fonts/montserrat/Montserrat-Regular.ttf'); 
    }

    @font-face {
    font-family: Montserrat-Bold;
    src: url('../fonts/montserrat/Montserrat-Bold.ttf'); 
    }

    @font-face {
    font-family: Montserrat-Black;
    src: url('../fonts/montserrat/Montserrat-Black.ttf'); 
    }

    @font-face {
    font-family: Montserrat-SemiBold;
    src: url('../fonts/montserrat/Montserrat-SemiBold.ttf'); 
    }

    @font-face {
    font-family: Montserrat-Medium;
    src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
    }

    * {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Poppins-Regular, sans-serif;
}
h1, h2 {
	margin: 0px;
}

p {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}
/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

input[type="number"] {
    -moz-appearance: textfield;
    appearance: none;
    -webkit-appearance: none;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}
.bg0 {background-color: #fff;}
.bg1 {background-color: #f7f7f7;}


.container-contact100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: #e6e6e6;
  
}

.wrap-contact100 {
  width: 920px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 62px 55px 90px 55px;
}

.contact100-form {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.contact100-form-title {
  display: block;
  width: 100%;
  font-family: Montserrat-Black;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 40px;
}
.output{
    display: block;
    width: 100%;
    font-family: Montserrat-Black;
    font-size: 39px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 40px;
}

.wrap-input100 {
  width: 100%;
  position: relative;
  border: 1px solid #e6e6e6;
  border-radius: 13px;
  padding: 10px 30px 9px 22px;
  margin-bottom: 20px;
}
.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #555555;
  line-height: 1.2;
  padding-right: 15px;
}
input.input100 {
  height: 40px;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}
.container-contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 20px;
  width: 100%;
}

.contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  background-color: #333333;
  border-radius: 25px;

  font-family: Montserrat-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn i {
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn:hover {
  background-color: #00ad5f;
}

.contact100-form-btn:hover i {
  -webkit-transform: translateX(10px);
  -moz-transform: translateX(10px);
  -ms-transform: translateX(10px);
  -o-transform: translateX(10px);
  transform: translateX(10px);
}

@media (max-width: 768px) {
  .rs1-wrap-input100 {
    width: 100%;
  }

}

@media (max-width: 576px) {
  .wrap-contact100 {
    padding: 62px 15px 90px 15px;
  }

  .wrap-input100 {
    padding: 10px 10px 9px 10px;
  }
}
@media (max-width: 576px) {
  .alert-validate::before {
    padding: 0 10px 0 10px;
  }

  .true-validate::after,
  .btn-hide-validate {
    right: 0px;
    width: 30px;
  }
}


    </style>
</head>
<body>

<?php
$output = '';
if(!empty($_POST) && isset($_POST['number'])){
    $num = $_POST['number'];
    $fact = 1;

    for($i = $num; $i>=1; $i--){
        $fact = $fact*$i;
    }

    $output = "Factorial of ". $num ." is ".$fact;
}
?>
<div class="container-contact100">
		<div class="wrap-contact100">
        <form class="contact100-form validate-form" action="<?php echo $_SERVER[REQUEST_URI];?>" method="POST">
				<span class="contact100-form-title">
					Factorial
				</span>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Enter Number</span>
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
