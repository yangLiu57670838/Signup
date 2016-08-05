<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<form action="asset/php/signup.php" method="post">
  Email:<br>
  <input type="email" name="email" id="email" onkeyup="validate()" required>
  <br>
  Password:<br>
  <input type="password" name="password" id="password" onkeyup="validate()" required>
  <br><br>
  <input type="submit" value="Signup" id="button" disabled>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="asset/javascripts/main.js"></script>
</body>
</html>
