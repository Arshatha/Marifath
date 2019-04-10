<?php
//Include the database configuration file
include 'dbconfig.php';



//Fetch all the country data
$query = $db->query("SELECT * FROM Option1 WHERE status = 1 ORDER BY 1_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
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
                    $('#option3').html('<option value="OPtion2">Select Option2 first</option>');
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
			<form class="contact100-form validate-form" method="post" style="width: 30% !important" onsubmit="validate();">
				<span class="contact100-form-title">
					 Hello!<?php echo $login_session; ?>
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

				


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" formaction="./upload/index.php" type="submit">
							<span>
								Upload
							</span>
						</button>						
					</div>
				</div>
			</form>
		</div>
		<div class="column" style="margin-left: 35%; margin-top:-29%;">
			<form class="contact100-form validate-form" style="width: 30% !important">
				<span class="contact100-form-title">
					 <?php echo $login_session; ?>
				</span>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option2</span>
					<div>
					<select  id="option2"  class="selection-2">
    <option value="">Select Option1 first</option>
</select>

					</div>
					
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option5</span>
					<div>
		<select id="option5" class="selection-2">
    <option value="">Select Option4 first</option>
</select>

					</div>
					<span class="focus-input100"></span>
				</div>

				


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" formaction="./logout.php">
							<span>
								Sign Out
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>

					</div>
				</div>
			</form>
		</div>
		<div class="column" style="margin-left: 70%; margin-top:-29%;">
			<form class="contact100-form validate-form" style="width: 30% !important">
				<span class="contact100-form-title">
					 <?php echo $login_session; ?>
				</span>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option3</span>
					<div>
					<select id="option3" class="selection-2">
    <option value="">Select Option2 first</option>
</select>

					</div>
					
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Option6</span>
					<div>
		<select id="option6" class="selection-2">
    <option value="">Select Option5 first</option>
</select>

					</div>
					<span class="focus-input100"></span>
				</div>

				


			</form>
		</div>

		</div>
	</div>
</div>
		<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
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
			if (option1.value||option2.value||option3.value||option4.value||option5.value||option6.value==0) {
				alert ("Please fill all the options");
				break;

			}
		}
	</script>
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





<!--===============================================================================================-->

</body>
</html>
