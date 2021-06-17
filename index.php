<?php
$username_error="";
$password_error="";

if(empty($_POST["username"])){

	$username_error="Name is required";
}
else{
	echo htmlspecialchars($_POST["username"]);
}

if(empty($_POST["password"])){

	$password_error="Password is required";
}
else{
	echo htmlspecialchars($_POST["password"]);
}

?>



<html>
<head>

  <link rel="stylesheet" href="style.css">


	<meta charset="utf-8">
	<title>Form Validation Page</title>
</head>
<body>
	<div class="header">
	<h1>Registration</h1></div><br/><br/>
	<form method="post" action="" autocomplete="off">

		<div class="row">
      <div class="col-25">
<label style=" font-size: 150%;">UserName</label>
</div>
 <div class="col-75">
<input type="username" placeholder="Please enter Username" name="username">
<span style="color:red;" class="error">*<?php echo $username_error;?></span></div></div>

<div class="row">
	<div class="col-25">
<label style=" font-size: 150%;">Password</label></div>
<div class="col-75">
<input type="password" placeholder="Please enter Password" name="password">
<span style="color:red;" class="error">*<?php echo $password_error;?></span></div></div>

<button  class="button" type="submit" name="register" value="register">Submit</button>
</form>
</body>
</html>