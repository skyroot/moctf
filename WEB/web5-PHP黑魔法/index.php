<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<?php

	$flag="moctf{xxxxxxxxxx}";
	
	if (isset($_GET['a'])&&isset($_GET['b'])) {
		$a=$_GET['a'];
		$b=$_GET['b'];


		if($a==$b) 
		{
			echo "<center>Wrong Answer!</center>";
		}
		else {
			if(md5($a)==md5($b)) 
			{
				echo "<center>".$flag."</center>"; 
				echo "<!--By:daoyuan-->";
			}
			else echo "<center>Wrong Answer!</center>";
		}
		
	}
	else echo "<center>好像少了点什么</center>"; 
?>
</body>
</html>
