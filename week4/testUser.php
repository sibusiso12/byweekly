<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<?php
	require('user.class.php');
	if(isset($_POST['username']) && isset($_POST['email']))
	{
		$user=$_POST['username'];
		$email =$_POST['email'];
		
		if(!$user && !$email)
		{
			print "Enter name and email";
			die();
		}
		
		$name="name : ".$user." email ".$email;
		
	}
?>
</head>

<body>
	

	 <div class="hero-unit custom-unit">
   				<h1>Log in</h1>
   				             
   
    </div>

      <div class="container ">
          <form class="form-horizontal " method="post" action=<?php echo $_SERVER['PHP_SELF'];   ?>>
    <div class="control-group">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
    <input type="text" id="username" placeholder="Username" name="username" required >
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="username">Email</label>
    <div class="controls">
    <input type="text" id="email" placeholder="email" name="email" required >
    </div>
    </div>
    
   
    
    <div class="control-group">
    <div class="controls">
    
    <button type="submit" name ="login" class="btn btn-primary btn-large">Sign in</button>
    
    </div>
    </div>
    </form>
      <?php $pass = md5($password); print $pass ?>
      </div>
    
  <script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>