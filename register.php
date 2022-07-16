
<!DOCTYPE html>
<html>
<head>
<title>registration</title>
<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

<div class="box">
<h1>Registration</h1>
<form method="POST" action="php/registry.php">
    <label>First Name:</label>
<input type="text" id="first Name" placeholder="first name" name="first" ><br>
<label>Last Name:</label>
<input type="text" placeholder="last Name" name="last"><br>
<label>Password:</label>
<input type="Password" placeholder="enter the Password" maxlength="15" name="password"><br>
<label>Confirm Password:</label>
<input type="Password"  placeholder="Re-enter the Password" maxlength="15"><br>
<label>Date Of Brith:</label>
<input type="date" name="date" ><br>
<label>Gender:</label>
<select name="gender">
<option>select One</option>
<option>male</option>
<option>female</option>
<option>transgender</option>
</select><br>
<label>Email:</label>
 
<input type="email" placeholder="Enter the Email Address" name="email"><br>
<label>phone Number:</label>
<input type="text" placeholder="Enter phone Number" maxlength="10" name="phone"><br>
<label>Address</label>
<input type="textarea" placeholder="Enter the Address" name="add">


<input type="submit" class="from" value="Register">

<a href="front.html" style="text-decoration:none"><button class="from">Cancel</button></a>
</div>
</form>
</body>
</html>
