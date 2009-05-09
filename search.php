<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

     Search by GROUP Name&nbsp;&nbsp;
              <select name="group_name">
<option value ="" selected="selected">--  &nbsp; Select Group &nbsp; --</option>
 <?php
$cnt=mysql_query("select group_name from groups WHERE  username='$username'");
while($row=mysql_fetch_array($cnt))
{
echo "<option value='$row[0]'>$row[0]</option>";
}
?>
</select>
 <input type="hidden" name="username" value=<?php echo $username ?>>
<input type="submit" value="search" name="Search">

</body>
</html>
