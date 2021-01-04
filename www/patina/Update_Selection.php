<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "patina";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM media_collection where subtype='40'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sql1 = "SELECT  *,min(original_year) as year FROM media_collection_map WHERE media_collection_id=".$row['id']." AND original_year != '' GROUP BY media_collection_id";
    $result1 = $conn->query($sql1);
	while($row  = $result1->fetch_assoc()){
	  //echo $row['media_collection_id'].'-'.$row['year'].'<br>';
	  $year = "".$row['year']."-01-01";
	  //echo "UPDATE media_collection SET exhibition_sequence='' WHERE id=".$row['media_collection_id'].";";
	  $update_sql = "UPDATE media_collection SET exhibition_sequence='".$year."' WHERE id=".$row['media_collection_id'].";";
	  $update_result = $conn->query($update_sql);
	}
  }
} else {
  echo "0 results";
}
$conn->close();
?>