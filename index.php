<?php
session_start();
require_once "configure.php";

$username=$_GET['username'];
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
<style type="text/css">
<!--
.footerbutton {
	font-family: Verdana;
	font-size: 11px;
}
.style1 {
	font-family: Verdana;
	font-weight: bold;
	font-size: 14px;
	color: #7C7C7C;

}
.style2 {
	font-family: Verdana;
	font-size: 12px;
	color: #333333;
	line-height: 20px;
}
.style3 {
	font-family: Verdana;
	font-weight: bold;
	font-size: 14px;
	color: #FF0000;
}
-->
</style>
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
		<td height="400" colspan="16" align="left" valign="top" background="images/index_20.jpg">
        <table width="981" height="470" border="0">
          <tr>
            <td width="40" height="127">&nbsp;</td>
            <td width="378" rowspan="3" valign="top" align="center" bgcolor="#F0F0F0">
             <span class="style3"><h1><blink>
             <?php
             $cnt=mysql_query("select content from home");

             $row=mysql_fetch_array($cnt);

             echo $row[0];
             ?>
             </blink></h1></span> <br /> <br />
            <img src="images/websms.jpg" width="350" height="300"></td>
            <td width="501" align="center"><p align="justify"><span class="style1">Sending SMS to a group of people is  now
one click away!</span><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo "<a href='register.php?username=$username'>"; ?><img src='images/register_button.jpg' width='200' height='60' border='0'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo "<a href='create_group.php?username=$username'>"; ?><img src="images/login_button.jpg" width="100" height="70" border="0"></a><br>
<br>
 <span class="style2"><strong>WEB SMS</strong> is a free service that enables you to  exchange text messages with your friends. You can sign up for the free.  Once you have registered for this service: You can now login  with your Username and Password and start sending Messages.</span></p></td>
            <td width="34">&nbsp;</td>
          </tr>
          <tr>
            <td height="86">&nbsp;</td>
            <td align="center" valign="top"><p align="justify" class="style2"><br>
            Stay  Connected with your friends. After all, that's what The Everyday Web is all  about.And since WEB SMS is free,  you can use it as much as you want! </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="110">&nbsp;</td>
            <td><p><strong>Key  features:</strong></p>
              <ul type="disc">
                <li class="style2">Easy to use website</li>
                <li class="style2">Password protected access</li>
                <li class="style2">Send individual SMS or GROUP       SMS</li>
                <li class="style2">Add or Delete individuals or       GROUPS<br>
                </li>
                <li><span class="style2">Simple registration Procedure and No subscription charge</span><br>
                </li>
              </ul>
            <p>&nbsp;</p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
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
</body>
</html>
