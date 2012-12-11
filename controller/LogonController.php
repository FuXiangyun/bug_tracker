<?php
$url = "../index1.php"; ?>
<html>
<head>
<meta  http-equiv="refresh" content="3; url=<?php echo $url; ?>">
</head>
<body>
<?php
	include("../Class/DataBaseCon.php");
	echo "OK";
	$username = $_POST['username'];
	$password = $_POST['password'];
	echo $username.$password;
    $conn = mysql_connect("localhost", "root","");
    if($conn)
    {
		mysql_select_db("bbs_database",$conn) or die ("can't select database");
        echo "DataBase is OK!";
       
        //$res=mysql_query("set @u=\'$username\'",$conn);
        //$res=mysql_query("set @in_param=$param",$conn);
        //$res=mysql_query("set @p=\'$password\'",$conn);
        
        //$res=  mysql_query("select test2()",$conn);
        
        //$res=  mysql_query("select @result",$conn);
       
       
        //$row=mysql_fetch_row($res);
        //echo $row[0];
    }
?>
</body>
</html>