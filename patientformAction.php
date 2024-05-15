<?php

$conn = mysqli_connect("localhost", "root", "", "neuromodulation");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

 // Taking all 5 values from the form data
 $first_name =  $_REQUEST['firstname'];
 $surname = $_REQUEST['surname'];
 $dob =  $_REQUEST['DOB'];
 $age = $_REQUEST['age'];
 $bpi = $_REQUEST['bpi_options'];
 $rate = $_REQUEST['painRelief'];

 $sql = "INSERT INTO bpi_patient VALUES ('','$first_name', 
 '$surname','$dob','$age','$bpi','$rate')";
 
 if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."; 
   
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
