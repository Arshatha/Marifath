<?php
//Include the database configuration file
include 'dbconfig.php';



//Fetch all the country data
$query = $db->query("SELECT * FROM Option1 WHERE status = 1 ORDER BY 1_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CSS3 Animated Navigation Menu | Tutorialzine Demo</title>

        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />

		<!-- Font Awesome Stylesheet -->
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />

		<!-- Including Open Sans Condensed from Google Fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
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
    .options{
        width: 250px;
        height: 75px;
        background-color: green;
        color: white;
        font-size: 20px;
        padding: 25px;
        margin: 15px;
        border-radius: 10%;
        background-image: linear-gradient(90deg,red,yellow)
    }

    .buttons{
        width: 100px;
        height: 50px;
        background-color: blue;
        color: white;
        font-size: 20px;
        padding: 15px;
        margin: 20px;

    }
</style>
    </head>
    
    <body>

    	<form id="colorNav">
            
			<ul>
					<select id="option1" class="options">
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
					<select  id="option2"  class="options">
    <option value="">Select Option1 first</option>
</select>
					<select id="option3" class="options">
    <option value="">Select Option2 first</option>
</select><br><br><br>
					<select id="option4" class="options">
    <option value="">Select Option3 first</option>
</select>

<select id="option5" class="options">
    <option value="">Select Option4 first</option>
</select>

<select id="option6" class="options">
    <option value="">Select Option5 first</option>
</select>
<br><br><br><br><br>

<input type="button" class="buttons" value="Upload" onclick="window.location.href='upload/index.php'" />
<input type="button" class="buttons" value="Signout" onclick="window.location.href='logout.php'" />

				
			</ul>
		</form>


    </body>
</html>
