 <html>
<head>
<style type="text/css">
.style7 {
	color: #333333;
	font-family: verdana;
	font-size: 11px;
	text-decoration:none;
}
.style1 {
	color: #FFFFFF;
	font-family: verdana;
	font-size: 11px;
	text-decoration:none;
}
.style2 {
	color: #FCD781;
	font-family: verdana;
	font-size: 11px;
	text-decoration:none;

}
a:hover{color:#67a;}
</style>
</head>
<?php
//session_start();
require_once "configure.php";
header('Content-Type: text/html');

$id=$_GET['id'];
//echo $id;
  $login_username='username';  //echo $login_username;
 //$login_user=$_SESSION['user'];echo $login_user;

$cnt=mysql_query("select * from subscriber");
$username=mysql_fetch_array($cnt);
//echo $username[0];
//echo $username[6];

echo "<form action='my_friends.php' method='GET'  name='msgform' id='msgform'>
<table border='0' width='200' bgcolor='#489D91' align='left'>
<tr><td class='style1'>Write Scrap to $username[0]</td></tr>
<tr>
<td colspan='2'>
<textarea name='post_scrap' cols='43' rows='3'></textarea>
<input type='hidden' name='username' value=$username[3]>
<input type='hidden' name='id' value=$id>
<input type='hidden' name='login_username' value=$login_username>


</td>
</tr>

<tr>
<td>
<input type='submit' name='Submit' value='Post Scrap' onclick='return validate();'>
</td>

<td class='style7'>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href='my_friends.php?value=$login_username'><b>Cancel</b></a>
</td>
</tr>
</table></form>";
?>
 </html>

