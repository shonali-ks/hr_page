<?php
   include("config.php");
   
   
  
$sql = "SELECT * FROM applicant_details";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."phone: " . $row["phone"]. "<br>";
  }
} else {
  echo "0 results";
}

      
?>