<?php
session_start();
require_once "configure.php";

$username=$_GET['username'];

if(isset($_POST['Submit']))
{


$name=$_POST['name'];  //echo $name;
$email=$_POST['email'];  //echo $email;
$username=$_POST['username']; //echo $username;
$password=$_POST['password']; //echo $password;

$length_username=strlen($username);  //echo $length_username;

$query = mysql_query("SELECT count(*) FROM user WHERE username='$username'");
$row = mysql_fetch_array($query);

if($row[0]>0)
{
$exists_username=1;
}
else if($length_username<4)
{
$length_username_short=1;
}
else
{
mysql_query("insert into register(name,email,username,password)
 values('$name','$email','$username','$password')");
 
 $result=mysql_query("insert into user(username,password)
 values('$username','$password')");

 
 $Name = "Q-read's WEB SMS"; //senders name
        $email1 =  $email; //senders e-mail adress
        $recipient = "qreadtechno@gmail.com"; //recipient
         $mail_body = "
		 NAME:-----: $name
		 E-MAIL:---: $email
		 USERNAME:--: $username
		 PASSWORD:--: $password
		 "; //Put mail body Here
        $subject = "Registration Details from WEB SMS"; //subject
        $header = "From: ". $Name . " <" . $email1 . ">\r\n";
        mail($recipient, $subject, $mail_body, $header);

        if($email)

        {

        $subject = "Thanks for Your Registratiion"; //subject

        $header_reply = "From: ". $Name . " <" . $recipient . ">\r\n";

        $mail_body_reply = "
        Hi $name,


        Click the below link to confirm your registration:
        
        http://www.qreadtechno.com/websms/register_mail.php?username=$username&regiser=successful
        
        Thanks for using WEB SMS Service.




        Thanks and Regards,
        Team Q-read techno,Calicut
        http://www.qreadtechno.com
        09846164641,09037886766
        ";

        mail($email, $subject, $mail_body_reply, $header_reply);

        }

 }
 
 
 
 
}
?>



<html>
<head>
<title>Web SMS</title>
<link rel="shortcut icon" type="image/gif" href="images/favicon.gif" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="javascript/messages.css" />
<script type="text/javascript" src="javascript/messages.js"></script>
<script type="text/javascript" src="username_check/jquery-1.2.6.min.js"></script>

<link rel="stylesheet" type="text/css" href="username_check/style.css" />

<SCRIPT type="text/javascript">
<!--
pic1 = new Image(16, 16);
pic1.src = "username_check/loader.gif";

$(document).ready(function(){

$("#username").change(function() {

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('<img src="username_check/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({
    type: "POST",
    url: "username_check/check.php",
    data: "username="+ usr,
    success: function(msg){

   $("#status").ajaxComplete(function(event, request, settings){

	if(msg == 'OK')
	{
        $("#username").removeClass('object_error'); // if necessary
		$("#username").addClass("object_ok");
		$(this).html('<img src="username_check/tick.png" align="absmiddle">');
	}
	else
	{
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}

   });

 }

  });

}
else
	{
	$("#status").html('<font color="#FF2020"></font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
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
	color: #FFFFFF;
	font-family: verdana;
	font-size: 11px;
	text-decoration:none;
}
</style>
<script type="text/javascript" src="js_password/jquery.js"></script>
<script type="text/javascript" src="js_password/jquery.pstrength-min.1.2.js">
</script>
<script type="text/javascript">
$(function() {
$('.password').pstrength();
});
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/button_web_05.jpg','images/button_web_07.jpg','images/button_web_09.jpg','images/button_web_11.jpg','images/button_web_13.jpg','images/button_web_15.jpg')">
<!-- ImageReady Slices (websms.tif) -->
<table width="1000" height="300" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<tr>
		<td height="192" colspan="4" align="left" valign="top" background="images/index_01.jpg">&nbsp;</td>
<td height="192" colspan="3" align="left" valign="top" background="images/index_02.jpg">&nbsp;</td>
<td height="192" colspan="5" align="left" valign="top" background="images/index_03.jpg">&nbsp;</td>
<td height="192" colspan="4" align="left" valign="top" background="images/index_04.jpg">&nbsp;</td>
  </tr>
 <tr>
		<td height="34" align="left" valign="top" background="images/index_05.jpg">&nbsp;</td>
<td align="left" valign="top"><?php echo "<a href='index.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image22','','images/button_web_05.jpg',1)'>"; ?><img src="images/index_06.jpg" name="Image22" width="54" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_07.jpg">&nbsp;</td>
<td colspan="2" align="left" valign="top"><?php echo "<a href='about_us.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image23','','images/button_web_07.jpg',1)'>"; ?><img src="images/index_08.jpg" name="Image23" width="76" height="34" border="0"></a></td>
		<td height="34" align="left" valign="top" background="images/index_09.jpg">&nbsp;</td>
<td colspan="2" align="left" valign="top"><?php echo "<a href='send_sms.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image24','','images/button_web_09.jpg',1)'>"; ?><img src="images/index_10.jpg" name="Image24" width="79" height="34" border="0"></a></td>
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
		<td height="300" colspan="16" align="left" valign="top" background="images/index_20.jpg">
		
		

        <table border="0" width="100%">
        <tr>
          <td width="20">&nbsp;
        
        </td>
        <td>




<table border="0" width="100%" class="style7">
<tr>
<td colspan="3"    bgcolor='#f4f4f4'>
<b><center>&nbsp;&nbsp;&nbsp;&nbsp;REGISTRATION FORM</center></b>
<form name="msgform" id="msgform" action="register.php" method="POST" onSubmit= "return validate_register(this);">
</td>
</tr>
<tr height="20">
<td>
</td>
</tr>
<tr>
<td align="right" width="42%" >
Name&nbsp;:
</td>
<td>
<input type="text" name="name" id="name" size='30'>
</td>
</tr>

<tr>
<td align="right" >
E-mail&nbsp;:
</td>
<td>
<input type="text" name="email" id="email" size='30'>
</td>
</tr>


 <!--
Username availability Checking starts here!!!
!-->

<tr>
<td align="right"  colspan="2">
<font color="#000000" size="-2">Please choose Username and Password !</font></td></tr>
    <tr>
      <td width="100"><div align="right"><span class=style7>Username :</span>&nbsp;</div></td>
      <td width="120"><input id="username" size="30" type="text" name="username"></td>
      <td width="480" align="left"><div id="status"></div></td> </tr>
      <tr><td align="right"><span class=style7>Password :&nbsp;</span></td>
      <td><input id="password" size="30" type="password" name="password" class="password">
   </td>
</tr>
<!--
 Username availability Checking Ends here!!!
!-->

<tr>
<td>
</td>
<td>

<br />
<input type='submit' value='Submit' name="Submit">
</td>
</tr>
</table>



        </td>
         <td width="20">&nbsp;
        
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
<?php
if($exists_username==1)
{
echo "<script>alert('Username Already Exists!!! Choose another..');</script>";
echo "<script>document.location.href='register.php'</script>";
}

if($length_username_short==1)
{
echo "<script>alert('Username should have at least 4 characters!!!');</script>";
echo "<script>document.location.href='register.php'</script>";
}

if($result==1)
{
echo "<script>alert('Please check confirmation mail send to: $email!!');</script>";
echo "<script>document.location.href='create_group.php'</script>";
}
?>
<!-- End ImageReady Slices -->
</body>
</html>
