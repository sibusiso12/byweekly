<?php
	require('dbconn.class.php');
	class User
	{
		public $username;	
		public $email;
		public $password;	
		
		function __construct($username,$email)
		{
			$this->username = $username;
			$this->email = $email;
		}
		function setPassword($password)
		{
			#this method is from http://php.net/manual/en/faq.passwords.php
			
			$this->password =md5($password);
		
		}
		/*function getUsername()
		{
		
			return $this->username;		
		}	
		function getEmail()
		{
			return $this->email;	
		}	
		*/
	
		function display_user_infor()
		{ 
			$user_infor = "Username ".$this->username." Email address ". $this->email."\n";
			return $user_infor;
		}
		function save($username,$email,$password)
		{
			$dbconn = new DatabaseConnection;
			$dbconn->establish_connection();
			
			$query = "INSERT into users(username, email_address, password) values('".mysql_escape_string($username)."','".mysql_escape_string($email)."','".mysql_escape_string($this->password)."')";
			
			print $dbconn->execute($query);
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	
</body>
</html>