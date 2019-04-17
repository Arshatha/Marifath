
<?php

include 'connect.php';


$option1=$_POST["option1"];
$option2=$_POST["option2"];
$option3=$_POST["option3"];
$option4=$_POST["option4"];
$option5=$_POST["option5"];
$option6=$_POST["option6"];


	if(isset($_POST["btnSubmit"])){		
		$errors = array();
		
		$extension = array("pdf");
		
		$bytes = 1024;
		$allowedKB = 5000;
		$totalBytes = $allowedKB * $bytes;
		
		if(isset($_FILES["files"])==false)
		{
			echo "Please, Select the files to upload!!!";
			
		}
		
		$conn = mysqli_connect("localhost","arshatha1997","arshsql1997","tutor_login");	
		
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			$uploadThisFile = true;
			
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "File type is invalid. Name:- ".$file_name);
				$uploadThisFile = false;
			}				
			
			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "File size must be less than 5MB. Name:- ".$file_name);
				$uploadThisFile = false;
			}
			
			if(file_exists("Upload/".$_FILES["files"]["name"][$key]))
			{
				array_push($errors, "File is already existing. Name:- ". $file_name);
				$uploadThisFile = false;
			}
			
			if($uploadThisFile){
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				$query = "INSERT INTO UserFiles(FilePath, FileName,Option1,Option2,Option3,Option4,Option5,Option6,upload_time) VALUES('Upload','".$newFileName."','$option1','$option2','$option3','$option4','$option5','$option6',now())";
				
				mysqli_query($conn, $query);
				header("Location:uploadpage.php" );	

			}
		}
		
		mysqli_close($conn);
		
		$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}		
	}
?>