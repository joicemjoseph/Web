

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title></title>
<style type="text/css">
	@import url(menu_style.css);
</style>
</head>
<body>

<ul id="menu">
<?php echo "
    <li><a href='send_sms.php?username=$username&&sms=check' title='Send Individual SMS'>Send Individual SMS</a></li>
    <li><a href='send_sms.php?username=$username&&sms=check&&value=group' title='Send GROUP SMS'>Send GROUP SMS</a></li>
	<li><a href='create_group_login.php?username=$username' title='Create New GROUP'>Create New GROUP</a></li>
	<li><a href='add_new_subscriber.php?username=$username' title='Add New Subscriber'>Add New Subscriber</a></li>
	<li><a href='view_all_groups.php?username=$username' title='Manage all GROUPS'>Manage all GROUPS</a></li>
    <li><a href='change_password.php?username=$username' title='Change Password'>Change Password</a></li>
	";
	
	$stat=mysql_query("select status from user where username='$username'");

 $status=mysql_fetch_row($stat);  //echo $status[0];

 if($status[0]=='2')
 {
	echo "<li><a href='admin_feedback_view.php?username=$username' title='View Feedback'>View Feedback</a></li>
          <li><a href='home_edit.php?username=$username' title='Home Page Edit'>Home Caption Edit</a></li>
		  <li><a href='add_message_category_name.php?username=$username' title='Add SMS Category'>Add SMS Category</a></li>
		  <li><a href='edit_message_category_name.php?username=$username' title='Edit SMS Category'>Edit SMS Category</a></li>
		  <li><a href='delete_message_category_name.php?username=$username' title='Delete SMS Category'>Delete SMS Category</a></li>
	      <li><a href='add_sms_admin.php?username=$username' title='Add SMS'>Add SMS</a></li>
	      <li><a href='update_sms_admin.php?username=$username' title='Edit SMS'>Edit SMS</a></li>
	      <li><a href='delete_sms_admin.php?username=$username' title='Delete SMS'>Delete SMS</a></li>
    ";
 }
 echo "<li><a href='create_group.php?option=logout' title='logout'>logout</a></li>";
?>
</ul>

</body>
</html>
