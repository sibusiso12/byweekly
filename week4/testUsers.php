<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.js" rel="javascript" type="text/js" />
<?php
	 require('user.class.php');
	 
	 if(!empty($username)&&!empty( $email)&&!empty($pass))
	 {
		print "Enter data required in every field";	 
	 }
	 else
	 {
		$username =trim($_POST['username']);
		 $email =trim($_POST['email']);
		 $pass =trim($_POST['pass']);
		 
		 if(!preg_match('/[a-zA-Z0-9\.]{1,8}/',$username))
		{
			echo'please enter a valid 8 character username'."\n";
		}
		if(!preg_match('/[a-z0-9\-\.\_]+\@[a-z0-9\-\.]+\.[a-z0-9]/',$email))
		{
			echo'please enter a valid email'."\n";
		}
		
		if(!preg_match('/[a-zA-Z0-9\.]{1,}/',$pass))
		{
			echo'please enter a valid alphanumeric password with at least one uppercase'."\n";
		}
		 
	 }
	 
	
	 
	 
	
	 
?>
</head>

<body>
<center>

<form id="form1" name="form1" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
<h1>Login:</h1>
<table width="450" border="0" align="center">
  <tr>
      <td><div align="right">Username</div></td>
      <td><input name="username" placeholder="Username"></t></td>
    </tr>
   	 <tr>
      <td><div align="right">Email address</div></td>
      <td><input name="email" placeholder="Email Address"></t></td>
    </tr>
    <tr>
      <td> <div align="right">Password </div></td>
      <td><input type="password" name="pass" placeholder="password"></td>
    </tr>
    <!--<tr>
      <td> <div align="right">Password </div></td>
      <td><input type="password" name="pass" placeholder="password"></td>
    </tr>
    <tr>
      <td><div align="right">Confirm password </div></td>
      <td><input type="password" name="vpass" placeholder="Confirm password" /></td>
    </tr>-->
      <tr>
     <td>
	 </td>
      <td>
	 </td>
    </tr>
	<tr>
    <td>
	 </td>
	  <td colspan="2"><div align="center">
	    </div> <?php
	  
	  		if(isset($_POST['Sub']))
			{
			    $Use = new User($username,$email);
		 		$Use->setPassword($pass);  
      			echo $Use->display_user_infor();
				
				
			echo $Use->save($Use->username,$Use->email,$Use->pass);
			}
			
			
	  
	  ?></td>
	  </tr>
     <tr>
      <td>
	 </td>
       <td colspan="2"><div align="center">
	    <input type="submit" name="Sub" value="Login" /></td>
    </tr>
      <tr>
     <td>
	 </td>
      <td>
	 </td>
    </tr>
     <tr>
     
      <td></td>
    </tr>
     
  
	 
</table>
   <p >copyright &copy 210049401 </p> 
  
</form>
</center>
</body>
</html>