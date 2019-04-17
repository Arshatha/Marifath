<?php
//Include the database configuration file
include 'connect.php';

if(!empty($_POST["1_id"])){
    //Fetch all state data
    $query = $con->query("SELECT * FROM Option2 WHERE 1_id = ".$_POST['1_id']." AND status = 1 ORDER BY 2_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select Option2</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['2_id'].'">'.$row['2_name'].'</option>';
        }
    }else{
        echo '<option value="">Option2 not available</option>';
    }
}elseif(!empty($_POST["2_id"])){
    //Fetch all city data
    $query = $con->query("SELECT * FROM Option3 WHERE 2_id = ".$_POST['2_id']." AND status = 1 ORDER BY 3_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select Option3</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['3_id'].'">'.$row['3_name'].'</option>';
        }
    }else{
        echo '<option value="">Option3 not available</option>';
    }
}elseif(!empty($_POST["3_id"])){
    //Fetch all city data
    $query = $con->query("SELECT * FROM Option4 WHERE 3_id = ".$_POST['3_id']." AND status = 1 ORDER BY 4_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select Option4</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['4_id'].'">'.$row['4_name'].'</option>';
        }
    }else{
        echo '<option value="">Option4 not available</option>';
    }
}elseif(!empty($_POST["4_id"])){
    //Fetch all city data
    $query = $con->query("SELECT * FROM Option5 WHERE 4_id = ".$_POST['4_id']." AND status = 1 ORDER BY 5_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select Option5</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['5_id'].'">'.$row['5_name'].'</option>';
        }
    }else{
        echo '<option value="">Option5 not available</option>';
    }
}elseif(!empty($_POST["5_id"])){
    //Fetch all city data
    $query = $con->query("SELECT * FROM Option6 WHERE 5_id = ".$_POST['5_id']." AND status = 1 ORDER BY 6_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select Option6</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['6_id'].'">'.$row['6_name'].'</option>';
        }
    }else{
        echo '<option value="">Option6 not available</option>';
    }
}
?>