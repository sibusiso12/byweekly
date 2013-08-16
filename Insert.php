 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<style type="text/css">
.radius {
	clear: both;
	float: none;
	height: auto;
	width: auto; 
	border-radius :10px;
}
</style>
</head>

<body >
<div id="myBox"><table   width="1050" border="0" style="BORDER-COLLAPSE: collapse"    align="center">
  <tr>
    <td height="43" colspan="3" bgcolor="#CCCCCC"> <a href="Register.html"> Register</a></td>
    
  </tr>
  <tr>
    <td width="361" height="287" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="523" align="left" valign="middle" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="Insert.php">
      <p>&nbsp; 
      
<?php
	
	$name = $_POST['name'];
	$surname  = $_POST['surname'];
	$pass  = $_POST['pass'];
	$rpass = $_POST['rpass'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];
 
	if(!$name  )
	{
		echo"  Name Field required  <br/>" ;
		}
		else if(!$surname) {
			echo"  Surname Field required  <br/>" ;
			}
			else if(!$pass) {
			echo"  Password Field required  <br/>" ;
			}
			else if(!$rpass) {
			echo"  Password Field required  <br/>" ;
			}else if(!$username) {
			echo"  Username required  <br/>" ;
			}else if(!$email) {
			echo"  Email Field required  <br/>" ;
			}else if(!$cell) {
			echo" Cell number  Field required  <br/>" ;
			}else if($pass != $rpass)
			{
				echo "your password dont match ";
				}
		else if(!preg_match("/^[a-zA-Z0-9\_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\_]+$/",$email))
		{
			echo "wrong email format";
			
		}
		else if(!preg_match("/^\+27[786]{1}[0-9]{1}-[0-9]{3}-[0-9]{4}$/", $cell)) {
  			echo"Wrong number";
			}
			else if(!preg_match("/^([a-zA-Z0-9-_]?\s?(.)?){4,}+$/", $username))
			{
				echo"wrong user name";
			}
			else if(!preg_match("/^[a-zA-Z]{3,}+$/", $name))
			{
				echo"wrong name format";
			}
			else if(!preg_match("/^[a-zA-Z0-9-_]{5,}+$/", $surname))
			{
				echo"wrong lastname format";
			}
			else if( !preg_match("/^(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{4,8})$/", $pass))
			{
				echo"wrong password";
			}
		else
		{
		 echo"Successfull Registered";
	   }
	       
		
?></p>
    </form></td>
    <td width="152" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="#FFFFFF">&copy;Created &amp; edited by MP Nkuna 211098546 2013 </td>
  </tr>
</table>
</div>
 
</body>
</html>

 