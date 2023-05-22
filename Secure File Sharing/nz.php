
<html>
<head>
<body>
<table>
<tr>
<td><a href="nz.php?file_id=<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM fildet";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["name"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>">Download</a></td>
</tr>
<tr>

</tr>
</table>
</body>
</head>
</html>    