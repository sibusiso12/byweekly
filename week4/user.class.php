<?php
	class User
	{
		private $username;
		private $email;
		private $password;
		
		function __construct($username,$email)
		{
			$this->username=$username;
			$this->email=$email;
		}
		function setPassword($password)
		{
			$pass = MD5($password);
			return $pass;
		}
		function display_user_infor($username,$email)
		{
			return "Username ".$username." Email ".$email;
		}
	}
?>