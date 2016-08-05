<?php
$con = mysqli_connect("166.62.28.146","gforceUser","abcdefg","gforce");

$result = mysqli_query($con, "SELECT * FROM wme_users ORDER BY id DESC LIMIT 1");
while($row = mysqli_fetch_array($result)) {
echo 'Id: ' . $row['id'] . '. Hello {' . $row['email'] . '}';
echo '<br/>';
}

?> 

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<h3>Name:</h3>
<div id="result"></div>
<h3>Domain:</h3>
<div id="result2"></div>
<h3>Others:</h3>
<div id="result3"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="asset/javascripts/main2.js"></script>
</body>
</html>