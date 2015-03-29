<?php
session_start();
include_once 'connect.inc.php';
$q1="delete from  hall where name='{$_SESSION['username']}'";
mysql_query($q1) or die(mysql_error());
$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$snacks=$_POST['snacks'];
$dinner=$_POST['dinner'];
for ($i=0;$i<=6;$i++)
{
	$q="insert into hall values('{$_SESSION['username']}','{$i}','{$breakfast[$i]}','{$lunch[$i]}','{$snacks[$i]}','{$dinner[$i]}')";
	mysql_query($q) or die(mysql_error());
}
echo 'Menu is updated succesfull';
echo '<script>alert("Successfully entered..")</script>';


?>
<br><br>
<a href="student_feedback.php" style="font-size:25px">student's feedback</a>
<a href="desiredmenu_print.php" style="font-size:25px">student's Desired menu</a>
<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>