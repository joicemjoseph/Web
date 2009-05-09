<?php
session_start();
require_once "configure.php";
if(isset($_GET['option']))
{
session_destroy();
$_SESSION=array();
}
$username=$_GET['username'];



if(isset($_POST['submit']))
{

 $uname=$_POST['uname']; //echo $uname;

 $pword=$_POST['pword']; //echo $pword;

 $cnt=mysql_query("select count(*) from user where username='$uname'
  AND password='$pword'");

 $count=mysql_fetch_row($cnt);  //echo $count[0];

  $status=mysql_query("select status from user where username='$uname'
  AND password='$pword'");

 $row=mysql_fetch_row($status);  //echo $row[0];

  $email=mysql_query("select email from register where username='$uname'
  AND password='$pword'");

 $test=mysql_fetch_row($email);  //echo $test[0];


  if($count[0]>0)

   {

   if($row[0]==0)
   {
   echo "<script>alert('Please check confirmation mail send to: $test[0]!!');</script>";
   }
   else if($row[0]==1)
   {
 $_SESSION['user']="$uname";

 echo "<script>document.location.href='create_group_login.php?username=$uname'</script>";
  }
  else if($row[0]==2)
   {
 $_SESSION['user']="$uname";

 echo "<script>document.location.href='create_group_login.php?username=$uname'</script>";
  }

  }

 else if($count[0]<=0)


 {

 echo "<script>alert('Incorrect Username or Password');</script>";

 }

}
?>

<html>
<head>
<title>Web SMS</title>
<link rel="shortcut icon" type="image/gif" href="images/favicon.gif" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="username_check/style.css" />
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
.style8 {
	color: #333333;
	font-size: 12px;
	font-family: Verdana;
	line-height: 20px;
}
.style11 {
	color: #0066CC;
	font-size: 14px;
	font-family: Verdana;
	line-height: 20px;
	font-weight: bold;
}
.style12 {color: #0066CC}
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
echo "<a href='send_sms.php?username=$username' onMouseOut='MM_swapImgRestore()' onMouseOver='MM_swapImage('Image25','','images/button_web_11.jpg',1)'>";
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



        <table border="0" width="90%" align="center">
        <tr>
          <td width="10">&nbsp;
        <img src="images/login_welcome.jpg" width="150" height="100">
        </td>
        <td width="55%">

          <span class="style8"><strong>With WEB SMS you can:</strong> <br />
          <br />
          <strong>*</strong> Start GROUP's of your own.<br />
        <br />
        <strong>*</strong> Add users to any GROUP with no limit.<br />
        <br />
        <strong>*</strong> Send messages to an individual or to GROUP members all at once.<br />
        <br />
        <strong>*</strong> Manage all GROUP's.          </span></td>
        <td>


<form method="post" action="create_group.php" name="msgform" id="msgform">
<table width="0" height="0" cellpadding="2" bgcolor="#F2F2F2" border="0" align="right" cellspacing="3" id="Table_01" class="style7">
<tr>
          <td align="center">
            <p><span class="style12">&nbsp;</span></p>
            <p>
            <b>Login Here! </b>
            <br />

            </p>
               <input type="hidden" name="username" id="username" <?php echo "value=$username"?>>
              <label><span class="style14">Username :</span>
              <input type="text" name="uname" id="uname">&nbsp;&nbsp;
              </label>
              <p>
                <label><span class="style14">Password&nbsp; :</span>
                <input type="password" name="pword" id="pword">&nbsp;&nbsp;
                </label>
              </p>
              <p>
                <label>
                <input type="submit" name="submit" id="submit" value="Login">
                </label>
              </p>
          </form>
         <br />

         <b>New User?
      <?php echo "<a href='register.php?username=$username' style='text-decoration:none;'><font color='blue'> Sign UP</b></font></a>";?>


       <br />  <br />


		</td>

	</tr>


</table>





      </td>
         <td width="20">&nbsp;

        </td>
        </tr>
        <tr>
        <td colspan="2">
          <span class="style11">So why wait, if you are a registered user simply login to your account and experience the best end to end text messaging website around, If you have not registered yet go ahead and do so registration is absolutely free.... you have nothing to lose. So get connected to the wireless world today!          </span></td>
        <td colspan="2">
        <img src="images/send.sms.gif" width="233" height="174"></img>
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
</body>
</html>
