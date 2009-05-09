<?php
session_start();
require_once "configure.php";

$value=$_GET['value'];//echo $value;
 $id=$_GET['id']; //echo $id;
 $username=$_GET['username']; //echo $username;
 
 if(isset($_GET['id']))
 {
  $delete_category=mysql_query("delete from sms_category where id=$id");
  $delete_category_message=mysql_query("delete from messages_inbox where category_id=$id");
}

if(isset($_SESSION['user']))
{
$username=$_GET['username']; //echo $username;

?>
<html>
<head>
<title>Web SMS</title>
<link rel="shortcut icon" type="image/gif" href="images/favicon.gif" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<!-- css skin -->
<link rel="stylesheet" type="text/css" href="style2.css" />
<style type="text/css">
a {
color:#333;
text-transform: capitalize;
}
a:hover{
color: #999;
text-decoration:underline
}
</style>
<style type="text/css">
.footerbutton {
	font-family: Verdana;
	font-size: 11px;
}
.style7 {
	color: #333333;
	font-family: verdana;
	font-size: 11px;
	text-decoration:none;
}
.style1 {
	color: #FF0000;
	font-family: verdana;
	font-size: 11px;
	text-decoration:none;
}
.style2 {
	color: #E8582F;
	font-family: verdana;
	font-size: 12px;
	text-decoration:none;
}
</style>
<script langauge="javascript">
function validate()
{
var name1;
with(window.document.msgform)
{
name1=update_category;
}
if(name1.value=='')
{
alert("Enter Category");
name1.focus();
return false;
}

return (true);
}

</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/button_web_05.jpg','images/button_web_07.jpg','images/button_web_09.jpg','images/button_web_11.jpg','images/button_web_13.jpg','images/button_web_15.jpg')">
<!-- ImageReady Slices (websms.tif) -->

<table width="1000" height="400" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<tr>
		<td height="192" colspan="4" align="left" valign="top" background="images/index_01.jpg">&nbsp;</td>
<td height="192" colspan="3" align="left" valign="top" background="images/index_02.jpg">&nbsp;</td>
<td height="192" colspan="5" align="left" valign="top" background="images/index_03.jpg">&nbsp;</td>
<td height="192" colspan="4" align="left" valign="top" background="images/index_04.jpg">&nbsp;</td>
  </tr>
 <tr>
		<td height="34" align="left" valign="top" background="images/index_05.jpg">&nbsp;</td>
<td align="left" valign="top"><?php echo "<a href='send_sms.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image22','','images/button_web_05.jpg',1)'>"; ?><img src="images/index_06.jpg" name="Image22" width="54" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_07.jpg">&nbsp;</td>
<td colspan="2" align="left" valign="top"><?php echo "<a href='about_us.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image23','','images/button_web_07.jpg',1)'>"; ?><img src="images/index_08.jpg" name="Image23" width="76" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_09.jpg">&nbsp;</td>
<td colspan="2" align="left" valign="top"><?php echo "<a href='send_sms.php?username=$username&&sms=check' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image24','','images/button_web_09.jpg',1)'>"; ?><img src="images/index_10.jpg" name="Image24" width="79" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_11.jpg">&nbsp;</td>
<td align="left" valign="top">
<?php 
if($username)
{
echo "<a href='create_group_login.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image25','','images/button_web_11.jpg',1)'>"; 
}
else
{
echo "<a href='create_group.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image25','','images/button_web_11.jpg',1)'>"; 
}
?>
<img src="images/index_12.jpg" name="Image25" width="103" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_13.jpg">&nbsp;</td>
<td colspan="2" align="left" valign="top"><?php echo "<a href='feedback.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image26','','images/button_web_13.jpg',1)'>"; ?><img src="images/index_14.jpg" name="Image26" width="85" height="34" border="0"></a></td>
		<td align="left" valign="top" background="images/index_15.jpg">&nbsp;</td>
<td align="left" valign="top"><?php echo "<a href='contactus.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image27','','images/button_web_15.jpg',1)'>"; ?><img src="images/index_16.jpg" name="Image27" width="88" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_17.jpg">&nbsp;</td>
  </tr>
  <tr>
		<td colspan="7" align="left" valign="top" background="images/index_18.jpg">&nbsp;</td>
<td height="20" colspan="9" align="left" valign="top" background="images/index_19.jpg">&nbsp;</td>
  </tr>
	<tr>
		<td height="400" colspan="16" align="left" valign="top" background="images/index_20.jpg">
		
		
  <table border="0" width="100%">
  <tr height="100"><td width="10"></td><td bgcolor="#EEEDEF" align="left" class="style7">&nbsp;
  <img src="images/123.jpg" height="100"></img>
   <img src="images/advert.gif" height="100"></img>
  <td width="10"></td></tr>
        <tr>
          <td colspan="3">
              <table border="0" width="100%" height="300">
       <tr><td width="10"></td><td width="160" valign="top" bgcolor="#F3F3F3">
       <?php include "menu.php";?>
       </td>
       <td width="700" valign="top">
       
<table width="90%" height="0" border="0">
<tr><td colspan="3" class="style7" align="left">Delete SMS Category>></td></tr>
<tr><td colspan="3" align="center">&nbsp;</td></tr>
          <tr>
            <td height="300">&nbsp;</td>
            <td valign="top">

			&nbsp;

			  <?php
$cnt=mysql_query("select * from sms_category ORDER BY category");

while($row=mysql_fetch_array($cnt))
	 {
       ?>

<table border="0" width="400" bgcolor="#f4f4f4" align="center" class="style7">
<tr>
<td width="150">
<?php
echo "<b>$row[0]</b>";
?></td>
</tr>
<tr><td></td><td align="center">

<?php
echo "<a href='delete_message_category_name.php?id=$row[1]&value=delete&username=$username'>
<img src=images/delete.png border='0'></img></a>";
?>

</td></tr>
</table><br>

  <?php
  }
  ?>   </td>
            <td>&nbsp;</td>
          </tr>
        </table>


       </td>
       <td width="10"></td>
       </tr>
       </table>

        </td>
        </tr>
        </table>



        </td>
  </tr>
<tr>
  <td height="29" colspan="16" align="center" bgcolor="#f4f4f4" valign="bottom"  class="style2"><IMG SRC="images/powered-by-qread_techno.png"></img></td>
  </tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="278" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="54" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="28" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="26" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="43" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="36" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="103" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="65" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="88" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="117" height="1" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
<?php
 
   if($delete_category_message==1)
 {
   $username=$_GET['username'];
 echo "<script>alert('Category Deleted Successfully ...');</script>";
 echo "<script>document.location.href='delete_message_category_name.php?username=$username'</script>";
 }
 
 
}
else
{
echo "<script>alert('Invalid User. Register now!!!!');</script>";
echo "<script>document.location.href='create_group.php'</script>";
}
?>
