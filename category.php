<?php session_start();?>
<?php require_once 'configure.php'; ?>
<?php 
if(isset($_SESSION['user']))
{
$user_id=intval($_GET['user_id']); //echo $user_id;

$result_id=mysql_query("select category from messages_inbox WHERE category_id='$user_id'");
$row=mysql_fetch_array($result_id); //echo $row[0]; 

$category=$row[0]; //echo $category;

$table=messages_inbox; //echo $table;


if($user_id==$user_id)
{
$table=$table;
$sms="message";
}


$query="select * from $table WHERE category='$category'";
$result=mysql_query($query);
//$row_result=mysql_fetch_array($result);
$cnt=mysql_num_rows($result); //echo $cnt;
if($cnt>0)
{
?>
<table width="100%" border="0">
<tr height="30">
        <td >&nbsp;&nbsp;&nbsp;<strong>Select Category :</strong><font color="#ff0000">*</font></td></tr>
		 <tr><td>
		 
		 <?php
			$select="select *  from sms_category";
    $result_select=mysql_query($select) or die ("cannot select");
	//echo $row_select[0];
	  

	?>
			
    <select name="category" onChange="getinformation(this.value)">
	<option value ="" selected="selected" > <?php echo "$row[0]"; ?> </option>
    
	<?php
    while($row_select=mysql_fetch_array($result_select))
    {
     echo "<option value='$row_select[1]'>$row_select[0]</option>";
	}
    ?>
    </select>
	    
	</td>
  </tr>
  
  <br />
  
<?php
$set_message=1;
while($row_result=mysql_fetch_array($result))
				{
				$message=$row_result[$sms];
				$category=$row_result['category'];
								
if($i%2)
$clr="#f4f4f4";
else
$clr="#f4f4f4";


echo "
<DIV style='background-color:#FFF;border:solid 1px #ccc;'>
                     <TABLE class='classi' id='myreport' style='clear: both; width: 100%; font-size: 13px; margin-top:10px;background-image:url(160by2.com_files/images/qread.gif);background-repeat:no-repeat;background-position:center;'>

					        <TBODY id='reportbody'>
<TR classname='odd' class='odd' bgcolor=$clr>
<TD valign='top'>
<b><font color='red'>$category</font></b><br />
<A id='$set_message' href='javascript:setmessage($set_message,106);'>
$message
</TD>
</TR>";
$i++;
$set_message++;
}
}
else{
?>

<tr height="30">
        <td >&nbsp;&nbsp;&nbsp;
        <font color="#FF3300"><strong>No Results in this category</strong><font color="#ff0000">*</font></td>
  </tr>
<tr height="30">
        <td >&nbsp;&nbsp;&nbsp;<strong>Select Category :</strong><font color="#ff0000">*</font></td></tr>
         <tr><td>
		 
		  <?php
			$select="select *  from sms_category";
    $result_select=mysql_query($select) or die ("cannot select");
	  

	?>
			
    <select name="category" onChange="getinformation(this.value)">
	<option value ="" selected="selected" > <?php echo "$row[0]"; ?> </option>
    
	<?php
    while($row_select=mysql_fetch_array($result_select))
    {
     echo "<option value='$row_select[1]'>$row_select[0]</option>";
	}
    ?>
    </select>
	    
	</td>
  </tr>
<?php
}
?>
</table>


<?php




}
?>








