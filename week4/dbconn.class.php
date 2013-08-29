<?php
	
	class DatabaseConnection
	{
		private $root = "root";
		private $localhost = 'localhost';
		private $db_name = 'db_users';
		private $pass = '';
		
		function establish_connection()
		{
		
			$data = mysql_connect($this->localhost,$this->root,$this->pass)or die("Error  Database is not connected");
			
			mysql_select_db($this->db_name);
			
			return $data;
	
		}
		function execute($query)
		{
			$result = mysql_query($query);
		
			
			if($rows = mysql_affected_rows()==1)
			{
				return $rows.'Inserted data in the database '."\n";	
			}
			else
			{
				return "\n".'ERROR: Data in not insert in the database. try again<br>';
			}
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