<?php
//Include the database configuration file
include 'connect.php';
//Fetch all the country data
if(!isset($_SESSION['uname'])){
    header('Location:../index.php');
}

$query = $con->query("SELECT * FROM Option1 WHERE status = 1 ORDER BY 1_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP File Upload 2</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#option1').on('change',function(){
        var OneID = $(this).val();
        if(OneID){
            $.ajax({
                type:'POST',
                url:'ajaxdata.php',
                data:'1_id='+OneID,
                success:function(html){
                    $('#option2').html(html);
                    $('#option3').html('<option value="">Select Option2 first</option>');
                    $('#option4').html('<option value="">Select Option3 first</option>');
                    $('#option5').html('<option value="">Select Option4 first</option>'); 
                    $('#option6').html('<option value="">Select Option5 first</option>'); 

                }
            }); 
        }else{
            $('#option2').html('<option value="">Select Option1 first</option>');
            $('#option3').html('<option value="">Select Option2 first</option>');
            $('#option4').html('<option value="">Select Option3 first</option>');
            $('#option5').html('<option value="">Select Option4 first</option>'); 
            $('#option6').html('<option value="">Select Option5 first</option>'); 
        }
    });
    
    $('#option2').on('change',function(){
        var TwoID = $(this).val();
        if(TwoID){
            $.ajax({
                type:'POST',
                url:'ajaxdata.php',
                data:'2_id='+TwoID,
                success:function(html){
                    $('#option3').html(html);
                    $('#option4').html('<option value="">Select Option3 first</option>');
                    $('#option5').html('<option value="">Select Option4 first</option>'); 
                    $('#option6').html('<option value="">Select Option5 first</option>'); 
                }
            }); 
        }else{
            $('#option3').html('<option value="">Select Option2 first</option>');
            $('#option4').html('<option value="">Select Option3 first</option>');
            $('#option5').html('<option value="">Select Option4 first</option>'); 
            $('#option6').html('<option value="">Select Option5 first</option>'); 
        }
    });
    $('#option3').on('change',function(){
        var ThreeID = $(this).val();
        if(ThreeID){
            $.ajax({
                type:'POST',
                url:'ajaxdata.php',
                data:'3_id='+ThreeID,
                success:function(html){
                    $('#option4').html(html);
                    $('#option5').html('<option value="">Select Option4 first</option>'); 
                    $('#option6').html('<option value="">Select Option5 first</option>');
                }
            }); 
        }else{
            $('#option4').html('<option value="">Select Option3 first</option>');
            $('#option5').html('<option value="">Select Option4 first</option>'); 
            $('#option6').html('<option value="">Select Option5 first</option>'); 
        }
    });
     $('#option4').on('change',function(){
        var FourID = $(this).val();
        if(FourID){
            $.ajax({
                type:'POST',
                url:'ajaxdata.php',
                data:'4_id='+FourID,
                success:function(html){
                    $('#option5').html(html);
                    $('#option6').html('<option value="">Select Option5 first</option>'); 
                }
            }); 
        }else{
            $('#option5').html('<option value="">Select Option4 first</option>');
            $('#option6').html('<option value="">Select Option5 first</option>'); 
        }
    });
      $('#option5').on('change',function(){
        var FiveID = $(this).val();
        if(FiveID){
            $.ajax({
                type:'POST',
                url:'ajaxdata.php',
                data:'5_id='+FiveID,
                success:function(html){
                    $('#option6').html(html);
                }
            }); 
        }else{
            $('#option6').html('<option value="">Select Option5 first</option>'); 
        }
    });
});
</script>

<style type="text/css">
	.column {
  float: left;
  width: 100%;
  padding: 10px;
}
</style>
	</head>
	<body>
		<div class="container-contact100" style="align-items: left !important">

		<div class="wrap-contact100" style="width: 100% !important">
			<div class="column" style="float: left !important;">
			<form class="contact100-form validate-form" name="formUploadFile" method="post" style="width: 30% !important" enctype="multipart/form-data" id="uploadForm" action="upload.php" onsubmit="return validate();"> 
				<span class="contact100-form-title">
					 Upload Files<?php echo $login_session; ?>					 
				</span>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option1</span>
					<div>					
					<select id="option1" name="option1" class="selection-2">
                    <option value="">Select Option1</option>
                    <?php
                    if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                        echo '<option value="'.$row['1_id'].'">'.$row['1_name'].'</option>';
                    }
                    }else{
                        echo '<option value="">Option1 not available</option>';
    }
    ?>
</select>
					</div>
					
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option4</span>
					<div>
		<select id="option4" name="option4" class="selection-2">
    <option value="">Select Option3 first</option>
</select>
					</div>
					<span class="focus-input100"></span>
				</div>
<div class="column" style="margin-left:365px; margin-top:-223px;">
			<div class="contact100-form validate-form">
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option2</span>
					<div>
					<select  id="option2" name="option2" class="selection-2">
    <option value="">Select Option1 first</option></select>

					</div>
					
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option5</span>
					<div>
		<select id="option5" name="option5" class="selection-2">
    <option value="">Select Option4 first</option>
</select>

					</div>
					<span class="focus-input100"></span>
				</div>

				


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						
					</div>
				</div>
			</div>
		</div>

		<div class="column" style="margin-left: 740px; margin-top:-243px;">
			<div class="contact100-form validate-form">
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option3</span>
					<div>
					<select id="option3" name="option3" class="selection-2">
    <option value="">Select Option2 first</option>
</select>

					</div>
					
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option6</span>
					<div>
		<select id="option6" name="option6" class="selection-2">
    <option value="">Select Option5 first</option>
</select>

					</div>
					<span class="focus-input100"></span>
				</div>

			
			</div>
		</div>
				
		
			<!--</form>-->
						
				</div>
				<div class="panel panel-default">
				<div class="panel-body">
					<!--<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="upload.php" onsubmit="return validate();" >-->
						<div class="form-group">
							<label for="exampleInputFile">Select files to upload:</label>
							<input type="file" id="exampleInputFile" name="files[]" multiple="multiple" required="required">
							<p class="help-block"><span>Note:</span> Please, Select the only pdf files to upload with the size of 5MB only.</p>
						</div>	
						<div class="container-contact100-form-btn" style="width: 10%">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn" ></div>
							<button type="submit" class="contact100-form-btn" name="btnSubmit">Submit</button>
							

					</div>

				</div>


			</div>
			<div id="status">
					</div>

		</div>

					<!--<div class="container-contact100-form-btn" style="width: 20%; ">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a class="contact100-form-btn" href="view.php">
							<span>
								Show Uploaded files
							</span>
						</a>

					</div>
				</div>
			</div>-->

					</form>
					<div class="container-contact100-form-btn" style="width: 10%; margin-left: 90%;" >
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a class="contact100-form-btn" href="./logout.php">
							<span>
								Sign Out
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
		<div id="dropDownSelect1"></div>


		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<script type="text/javascript">
		function validate() {
		var a = document.forms["uploadForm"]["option1"].value;
		var b = document.forms["uploadForm"]["option2"].value;
		var c = document.forms["uploadForm"]["option3"].value;
		var d = document.forms["uploadForm"]["option4"].value;
		var e = document.forms["uploadForm"]["option5"].value;
		var f = document.forms["uploadForm"]["option6"].value;
  		if (a&&b&&c&&d&&e&&f != "") {
  			window.location.header="upload.html";
  			return true;

}
    else{
    	alert("All options must be filled");
    	return false;
    }
	}

	</script>

			<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
	
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
	</body>
</html>