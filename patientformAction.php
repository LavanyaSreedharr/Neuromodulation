<?php
include("config.php");

// Check connection
if ($db->connect_error) {
	die("Connection failed: "
		. $db->connect_error);
}

 // Taking all 5 values from the form data
 $first_name =  $_REQUEST['firstname'];
 $surname = $_REQUEST['surname'];
 $dob =  $_REQUEST['DOB'];
 $age = $_REQUEST['age'];
 $date_of_submission = date('Y-m-d');
 $bpi_relief_clinic = $_REQUEST['bpi_relief_clinic'];
 $bpi_worst = $_REQUEST['bpi_worst'];
 $bpi_least = $_REQUEST['bpi_least'];
 $bpi_average = $_REQUEST['bpi_average'];
 $bpi_right_now = $_REQUEST['bpi_right_now'];
 $bpi_general_activity = $_REQUEST['bpi_general_activity'];
 $bpi_mood = $_REQUEST['bpi_mood'];
 $bpi_walking_ability = $_REQUEST['bpi_walking_ability'];
 $bpi_normal_work = $_REQUEST['bpi_normal_work'];
 $bpi_relationships = $_REQUEST['bpi_relationships'];
 $bpi_sleep = $_REQUEST['bpi_sleep'];
 $bpi_enjoyment = $_REQUEST['bpi_enjoyment'];
 $bpi_total_score = $_REQUEST['bpi_total_score'];
 

 $sql = "INSERT INTO bpi_patient_details VALUES ('','$first_name', 
 '$surname','$dob','$age','$date_of_submission','$bpi_relief_clinic','$bpi_worst','$bpi_least','$bpi_average','$bpi_right_now','$bpi_general_activity',
 '$bpi_mood','$bpi_walking_ability','$bpi_normal_work','$bpi_relationships','$bpi_sleep',' $bpi_enjoyment','$bpi_total_score')";
 
 if(mysqli_query($db, $sql)){
    echo "<h3>data stored in a database successfully."; 
   
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
