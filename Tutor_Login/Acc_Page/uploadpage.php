<?php 
include 'connect.php';

if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html><head>
	<title>Upload Successful</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	</head>
	<body>
		<div class="container-contact100" style="align-items: left !important">

		<div class="wrap-contact100" style="width: 100% !important">
			<div class="column" style="float: left !important;">
				<span class="contact100-form-title">
					 Upload Files					 
				</span>				
					<h1> Files are Successfully Uploaded


					<div class="container-contact100-form-btn" style="width: 30%;" >
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a class="contact100-form-btn" href="view1.php">
							<span>
								View Files
							</span>
						</a>

					</div>
				</div>
					</div>
					
				</div>

	
			</div>
		</div>
					
					
			</div>

		</div>
			

		</div>

		</div>

		</div>
	</div>
</div>
		<div id="dropDownSelect1"></div>


		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		
	</body>
</html>