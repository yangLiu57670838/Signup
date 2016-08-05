<?php
$con = mysqli_connect("1.1.1.1","db_usr","db_pass","db_data");

$result = mysqli_query($con, "SELECT * FROM wme_users ORDER BY id DESC LIMIT 1");
while($row = mysqli_fetch_array($result)) {
echo $row['email'];    
}

?>