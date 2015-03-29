<html>
	<style>
		#tab {
		border-spacing:10px 10px;
		border:1px solid blue;
		}
		#tab tr td {
		text-align:right;
		border:1px solid red;
		}
		body
		{
		background-image:url('images/bg.gif');
		}
	</style>
</html>

<?php
	include_once 'core.inc.php';
	include_once 'connect.inc.php';
	$administrator_username=getuserfield('username');
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
	echo '<br>';
	if(!empty($firstname)&&!empty($surname)){
	echo 'You\'re logged in,  '.$firstname.'  '.$surname.'  Welcome'.'<br><br>';
	}
	echo '<br><br>';
	echo '<strong><i>Selected hall by the students.....</i></strong><br><br>';
	$query="SELECT * FROM selected_hall where 1";
			$query_run=mysql_query($query);
			echo '<table id="tab">';
		
		?><tr>
		<th>NAME</th>
		<th>HALL SELECTED</th>
		</tr>
		<?php
		
		
			while($row=mysql_fetch_array($query_run))
			{
				echo '<tr><td>';
				echo $row['student_username'].'</td><td> '.$row['hall_selected'];
				echo '</td></tr>';
			}
			echo '</table>';
			echo '<br><br>';
			?>	
	
	

<a href="student_feedback.php" style="font-size:25px">student's feedback</a><br><br>
<a href="desiredmenu_print.php" style="font-size:25px">student's Desired menu</a><br><br>
<a href="register.html" style="font-size:25px">Create a new cateror</a><br><br>
<a href="delete_cateror.php" style="font-size:25px">Want to delete a cateror</a><br><br>

<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>