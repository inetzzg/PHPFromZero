<html>
<!�������ƣ�8-11.php>
<!�����ܣ����麯����ʹ�á�>

<head>
	<title>���麯����ʹ��</title>
</head>
<body>
<?php	
	 		list($var1,$var2,$var3)=array("a","b","c");
	 		list($var4,$var5,$var6)=array(1=>"a",3=>"b","c");
	 				echo"$var1,$var2,$var3";
	 				echo"<br>\n";
	 				echo"$var4,$var5,$var6";
	 				echo"<br>\n";
	 		$arr=range(1,10);
	 		for($n=0;$n<count($arr);$n++)
	 		{
			 		echo"\$arr[$n]=$arr[$n];\n";
			 }
?>	 
	</body>
	</html>