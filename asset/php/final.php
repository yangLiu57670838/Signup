<?php
$con = mysqli_connect("166.62.28.146","gforceUser","abcdefg","gforce");

$result = mysqli_query($con, "SELECT * FROM wme_users ORDER BY id DESC LIMIT 1");
while($row = mysqli_fetch_array($result)) {
echo $row['email'];    
}

?>