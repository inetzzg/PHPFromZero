<html>
<!程序名称：5-3.php>
<!程序功能：PHP位运算符的使用。>

<head>
	<title>PHP位运算符的使用</title>
</head>
<body>
<?php
	 //此处变量a等于3,如果逻辑运算值为真,而位运算就等于二进制数11. 
	$a=3;
	//设置变量b等于6. 
	$b=6;
	//进行逻辑运算. 
	$c=($a&&$b);
	//进行位运算. 
	$d=($a&$b);
	//在浏览器上输出a 的值. 
	echo"\$a=$a";
	echo"<br>";
	//在浏览器上输出b的值. 
	echo"\$b=$b";
	echo"<br>";
	//在浏览器上输出$a&&$b的值. 
	echo"变量a和b的逻辑与运算:\$a&&\$b=$c";
	echo"<br>";
	//在浏览器上输出$a&$b的值. 
	echo"量a和b的位与运算:\$a&\$b=$d";
	?>
	</body>
	</html>