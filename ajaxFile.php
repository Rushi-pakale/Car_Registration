<?php
//Include database configuration file
include('database_config.php');

if(isset($_POST["country_id"])){
    //Get all state data
	$country_id= $_POST['country_id'];
    $query = "SELECT * FROM states WHERE country_id = '$country_id' 
	ORDER BY state_name ASC";
	$run_query = mysqli_query($conn, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        echo '<option value="">Select state</option>';
        while($row = mysqli_fetch_array($run_query)){
		$state_id=$row['state_id'];
		$state_name=$row['state_name'];
        echo "<option value='$state_id'>$state_name</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"])){
	$state_id= $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM cities WHERE state_id = '$state_id' 
	ORDER BY city_name ASC";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_array($run_query)){
		$city_id=$row['city_id'];
		$city_name=$row['city_name']; 
        echo "<option value='$city_id'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}

if(isset($_POST["id"])){
	$company_id= $_POST['id'];
    $query = "SELECT * FROM model WHERE company_id = '$company_id' 
	ORDER BY model ASC";
	$run_query = mysqli_query($conn, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        echo '<option value="">Select model</option>';
        while($row = mysqli_fetch_array($run_query)){
		$id=$row['id'];
		$model=$row['model'];
        echo "<option value='$id'>$model</option>";
        }
    }else{
        echo '<option value="">model not available</option>';
    }
}
?>