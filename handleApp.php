<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<?php
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$username = trim($_POST['username']);
	$number = trim($_POST['number']);
	$email = trim($_POST['email']);
	$pass= trim($_POST['pass']);
	$cpass = trim($_POST['cpass']);
	
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
	<?php
		 	if(!$fname && !$lname && !$username && !$number && !$email && !$pass &&!$cpass)
			{
				echo "please enter data in all required fields <br />";
				die;
			}
			
			
			if(!preg_match('/^[a-zA-Z]{5,10}|[A-Za-z]{2,10}$/',$fname))
			{
				echo "Incorrect First name provided <br />";
			}
			if(!preg_match('/^[a-zA-Z]{5,15}|[A-Za-z]{5,15}$/',$lname))
			{
				echo "Incorrect Last name provided <br />";
			}
			if(!preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/',$username))
			{
				echo "Incorrect username provided <br />";
			}
			
			if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$number))
			{
				echo "Invalid telephone numbers please enter a valid phone number <br />";
			}
			/*www.developphp.com/view_lesson.php?v=224?Cached*/
			
			if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email))
			{
				echo "Invalid email address please enter a valid email address <br />";
			}
			if(!preg_match('/^.(?=.{8,})(?=.[0-9])(?=.[a-z])(?=.[A-Z]).*$/',$pass))
			{
				echo "Your password must be 8 characters long<br /> 
				must be mixed with alphaberts,characters and numbers <br/>";
			}
			
			if($pass != $cpass)
			{
				echo "<br/>Your passwords does not match <br />";
			}
			
			
			
	
	?>
</body>
</html>
