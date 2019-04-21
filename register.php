
<!DOCTYPE html>
<html>
<head>
<title>Rail ticket booking</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Register</h2>
</div>

<form method="post" action="server.php?type=<?php echo $_GET['type']?> ">
<!-- Display Validation errors here -->

<div class="input-group">
<label>Email</label>
<input type="text" name="email" >
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password_1">
</div>

<div class="input-group">
<label>Confirm Password</label>
<input type="password" name="password_2">
</div>

<div class="input-group">
<button type="submit"  name="register" class="btn">Register</button>
</div>

<p>
Already has an account? <a href="login.php">Sign in</a>
</p>

</form>
</body>
</html>
