<?php

include("config.php");
// Check connection
if($_SERVER["REQUEST_METHOD"] == "POST") {
$fn= $_POST['first_name'];
$ln= $_POST['last_name'];
$fn= $_POST['first_name'];
$age= $_POST['age'];
$gender =$_POST['gender'];
$phone =$_POST['phone'];
$email = $_POST['email'];
$school = $_POST['School'];
$schoolgrade=$_POST['tenth'];
$pu = $_POST['pu'];
$pumarks = $_POST['pumarks'];
$ug = $_POST['ug'];
$ugmarks = $_POST['uggrade'];
$pg = $_POST['pg'];
$pggrage = $_POST['pggrade'];
$field = $_POST['feild'];
$why =$_POST['why'];
$experience=$_POST['experience'];
$about=$_POST['about'];
$project=$_POST['project'];
$goodat=$_POST['goodat'];
$long=$_POST['long'];

$sql = "INSERT INTO applicant_details (firstName,lastName,age,gender,phone,email) VALUES ('$fn','$ln','$age','$gender','$phone','$email')";

if(mysqli_query($con, $sql)){
    echo 'Added succesfully';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
$sql = "INSERT INTO applicant_edu(firstName,school,school_grade,pu,pu_grade,ug,ug_grade,pg,pg_grade) VALUES ('$fn','$school','$schoolgrade','$pu','$pumarks','$ug','$ugmarks','$pg','$pggrage')";

if(mysqli_query($con, $sql)){
    echo 'Added succesfully';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
$sql = "INSERT INTO info(phone,firstName,field,why,experience,contribution,project,other,time) VALUES ('$phone','$fn','$field','$why','$experience','$contribution','$project','$other','$time')";

if(mysqli_query($con, $sql)){
    header("location:landingpage.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

}

// Close connection
mysqli_close($con);
?>