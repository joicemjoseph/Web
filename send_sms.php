<?php
session_start();
require_once "configure.php";


$username=$_GET['username']; //echo $username;
$value=$_GET['value']; //echo $value;
$check=$_GET['sms']; //echo $check;


if(isset($_GET["Submit"]))
{
 $cnt=mysql_query("select count(*) from subscriber where username='$username'");

 $count=mysql_fetch_row($cnt);  //echo $count[0];

 if($count[0]<=0)

 {
 echo "<script>alert('SMS Sending failed ? Please add atleast a single subscriber to a GROUP')</script>";
 echo "<script>document.location.href='send_sms.php?username=$username&&sms=check'</script>";
 }
 else
 {
$message=$_GET['sms']; //echo $sms;
$count = $_GET['count'];
			for($i=0;$i<$count;$i++)
			{
				$name = $_GET[id.$i];
				//echo $name."<br />";
				$checked = $_GET[active.$i];
				//echo $checked."=".$name ;
				//echo $name;
				//echo $name."  hhh ".$checked  ."<br>";
				if ($checked=="yes")
				{

        $len=strlen($name);
	    if($name!=''&& $len==10)
        $numbers.=$name.",";
	 	      }

            }
$numbers=substr($numbers,0,(strlen($numbers)-1));

$sms_count=1;
$message=$message;  //echo $message;
$date=date(U); // format date for calculation in seconds
//print ("$date");  //if you want to see the date format now
$hourdiff = "5.5"; //change the server time plus one hour
$timeadjust = ($hourdiff * 60 * 60); //this is how to calc it
$now = date("Y-m-d h:i:s", $date + $timeadjust); //format display

$message=str_replace("\n","\r\n",$message);
require_once('api.php');
$sms="404";
//$message = "";
//$numbers = "";//commma seperated 10 digit mobile numbers
//$result = $client->call('getBalance', $param, '', '', false, true);
$sms = $client->call('SendSMS', $param, '', '', false, true);
	 //send sms script
$result=mysql_query("insert into sms(sms,sms_to,message) values('$sms','$numbers','$message')");


if($result)
{
$result_individual_successful=1;
}

	if($result_individual_successful==1)
	{
	 echo "<script>alert('SMS Sent Successfully')</script>";
     echo "<script>document.location.href='send_sms.php?username=$username'</script>";
	}
	else
	{
	echo "<script>alert('Error on Sending!!!'</script>)";
    echo "<script>document.location.href='send_sms.php?username=$username'</script>";
	}
  }
}


if(isset($_GET["Submit_group"]))

{

$message=$_GET['sms']; //echo $sms;

$group_name=$_GET['group_name']; //echo $group_name;

$username=$_GET['username']; //echo $username;

 $cnt=mysql_query("select mobile_no  from subscriber WHERE group_name='$group_name' AND username='$username'");

	 while($row=mysql_fetch_array($cnt))

	 {
	 //echo $row[0]."<br>";
	$len=strlen($row[0]);
	 if($row[0]!=''&& $len==10)
     $numbers.=$row[0].",";
	}
	 $numbers=substr($numbers,0,(strlen($numbers)-1));   //extracts characters froma String

	 //send sms script starts here
$sms_count=1;
$message=$message;
$date=date(U); // format date for calculation in seconds
//print ("$date");  //if you want to see the date format now
$hourdiff = "5.5"; //change the server time plus one hour
$timeadjust = ($hourdiff * 60 * 60); //this is how to calc it
$now = date("Y-m-d h:i:s", $date + $timeadjust); //format display

//$message="Q-read techno Web Development calicut";
$message=str_replace("\n","\r\n",$message);
require_once('api.php');
$sms="404";
//$message = "";
//$numbers = "";//commma seperated 10 digit mobile numbers
//$result = $client->call('getBalance', $param, '', '', false, true);
$sms = $client->call('SendSMS', $param, '', '', false, true);
	 //send sms script ends here

$result=mysql_query("insert into sms(sms,sms_to,message) values('$sms','$numbers','$message')");

	if($result)
	{
	 echo "<script>alert('SMS Sent Successfully')</script>";
     echo "<script>document.location.href='send_sms.php?username=$username&&value=group'</script>";
	}
	else
	{
	echo "<script>alert('Error on Sending!!!'</script>)";
    echo "<script>document.location.href='send_sms.php?username=$username'</script>";
	}
}









if(isset($_SESSION['user']))
{


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
<script type="text/javascript" src="javascript/user_edit.js"></script>
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
var name1,name2;
with(window.document.msgform)
{
name1=txt_msg;
name2=group_name;
}
if(name1.value=='')
{
alert("Enter Text Message");
name1.focus();
return false;
}
else if(name2.value=='')
{
alert(" Select a Group ");
name2.focus();
return false;
}

return (true);
}

</script>
<script langauge="javascript">
function validate_individual()
{
var name3;
with(window.document.msgform)
{
name3=txt_msg;
}
if(name3.value=='')
{
alert("Enter Text Message");
name3.focus();
return false;
}
return (true);
}

</script>
<script type="text/javascript">
checked=false;
function checkedAll (msgform) {
	var aa= document.getElementById('msgform');
	 if (checked == false)
          {
           checked = true
          }
        else
          {
          checked = false
          }
	for (var i =0; i < aa.elements.length; i++)
	{
	 aa.elements[i].checked = checked;
	}
      }
</script>
<script language="JavaScript1.2">

//Highlight form element-

var highlightcolor="#EFF0F5"

var ns6=document.getElementById&&!document.all
var previous=''
var eventobj

//Regular expression to highlight only form elements
var intended=/INPUT|TEXTAREA|SELECT|OPTION/

//Function to check whether element clicked is form element
function checkel(which){
if (which.style&&intended.test(which.tagName)){
if (ns6&&eventobj.nodeType==3)
eventobj=eventobj.parentNode.parentNode
return true
}
else
return false
}

//Function to highlight form element
function highlight(e){
eventobj=ns6? e.target : event.srcElement
if (previous!=''){
if (checkel(previous))
previous.style.backgroundColor=''
previous=eventobj
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
}
else{
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
previous=eventobj
}
}

</script>
<SCRIPT type="text/javascript" src="./qreadtechno_websms/compose_sms_qreadtechno.js"></SCRIPT>
<LINK rel="stylesheet" type="text/css" href="./qreadtechno_websms/style_qreadtechno.css">
 <LINK rel="stylesheet" href="./qreadtechno_websms/innerpage_qreadtechno.css" type="text/css">
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
   &nbsp; &nbsp;<img src="images/advertisement.jpg" height="100"></img>
  <td width="10"></td>
        <tr>
          <td colspan="3">
              <table border="0" width="100%">
              <tr><td></td><td colspan="3">
              <?php
			  if($check)
			  {
			   $subscriber=mysql_query("select count(*) from subscriber where username='$username'");

 $count_subscriber=mysql_fetch_row($subscriber);  //echo $count_subscriber[0];
 
 $group=mysql_query("select count(*) from groups where username='$username'");

 $count_group=mysql_fetch_row($group);  //echo $count_group[0];
 

    if($count_group[0]<=0)
  
   {
   
   echo "<table border='0' class='style7'><tr><td bgcolor='yellow'><blink><font color='red'>
   <b>WARNING</b> : You must create a GROUP & add atleast a single Subscriber to a GROUP before Sending SMS</font>
   <a href='create_group_login.php?username=$username'><font color='blue'>click here</font></a></blink></td></tr></table>";
   
   }
     else if($count_subscriber[0]<=0)
  
   {
   
   echo "<table border='0' class='style7'><tr><td bgcolor='yellow'><blink><font color='red'>
   <b>WARNING</b> : You must add atleast a single Subscriber to a GROUP before Sending SMS</font>
   <a href='add_new_subscriber.php?username=$username'><font color='blue'>click here</font></a></blink></td></tr></table>";
   
   }
   
			  }?>
              </td></tr>
       <tr><td width="10"></td><td width="160" valign="top" bgcolor="#F3F3F3">
       <?php include "menu.php";?>
       </td>
       <td width="400" valign="top">
       

<?php
if($value=='group')
{
?>
<form name="msgform" id="msgform" action="send_sms.php" method="GET"  onKeyUp="highlight(event)" onClick="highlight(event)">
<table border="0">
<tr>
<td class="style7" align="center">
<img src="images/Send Group SMS.jpg"></img><br /><br />
<b>Type SMS :</b>
<TEXTAREA style="overflow:auto;" id="txt_msg" cols="42" rows="6" name="txt_msg" onBlur="xyz();alertMsgLength();" onKeyDown="alertMsgLength();" onKeyPress="alertMsgLength();" onKeyUp="alertMsgLength();"	></TEXTAREA>
<br />Type SMS or Copy & Paste from Right.
</td>
</tr>
<tr>
<td  colspan="0" align="center"  class="style7">
<br />Select Group:<br />
	<select name="group_name" id="group_name">
    <option value ="" selected="selected" >___s e le c t___</option>
    <?php
    $select="select group_name  from subscriber WHERE username='$username' GROUP BY group_name";
    $result=mysql_query($select) or die ("cannot select");
    while($row=mysql_fetch_array($result))
    {
     echo "<option value='$row[group_name]'>$row[group_name]</option>";
    }
    ?>
    </select>
</td>
<td>
<?php
echo "<input type='hidden' name='username' id='username' size='30' value='$username'>";

?>
</td>
</tr>
<tr>
<td  colspan="0" align="center">
<br /><input type='submit' value='Send SMS' name="Submit_group"  onclick="return validate();">
<input type="reset" value="reset">
</td>
</tr>
</table>
</form>

<?php
}
else
{
?>
<form name="msgform" id="msgform" action="send_sms.php" method="GET"  onKeyUp="highlight(event)" onClick="highlight(event)">
       <table border="0">
       <tr>
<td align="center" width="42%"  class="style7">
<img src="images/Send Individual SMS.jpg"></img><br /><br />
<b>Type SMS:</b>   &nbsp;&nbsp;&nbsp;&nbsp; <br />
<TEXTAREA style="overflow:auto;" id="txt_msg" cols="42" rows="6" name="txt_msg" onBlur="xyz();alertMsgLength();" onKeyDown="alertMsgLength();" onKeyPress="alertMsgLength();" onKeyUp="alertMsgLength();"	></TEXTAREA>
<span  class="style7"> <br />Type SMS or Copy & Paste from Right.</span>
</td>
</tr>
<tr>
<td align="center" width="42%"  class="style7">
<?php
echo "<input type='hidden' name='username' id='username' size='30' value='$username'>";
?>
<br />
<input type="hidden" name="count" value="<?php echo $i; ?>" />
<input type='submit' value='Send SMS' name="Submit"  onclick="return validate_individual();">
<input type="reset" value="reset">
</td>
</tr>
<tr><td>

<!-- Q-READ's Subscriber selection code starts here! !-->

<div id="shortnews2" style="overflow: auto; width: 300px; height:
200px; padding: 0px; margin: 10px 0px 0px 35px; float: left; border: 2px
 solid rgb(247, 243, 247);">
        <div id="compose_contacts_div" style="margin: 0px 0px 0px 20px;
float: center; display: block;">
            <div style="z-index: 8;">
                <table class="servicesL" style="padding-top: 10px;
margin-left: -5px;" cellspacing="0">
                    <tbody><tr id="alltab">
                        <td colspan="2" style="background-color:
rgb(247, 247, 247); padding: 5px 4px; font-size: 12px; border-top: 1px
solid rgb(221, 221, 221); margin: 0px 0px 10px -15px;">
                            <input type='checkbox' name='checkall' onclick='checkedAll(msgform);'>
                            <span style="margin: 0px;"><label for="select_all"><b
style="margin: 0px 0px 3px 3px;">Select All</b></label></span>


                        </td>
                    </tr>
                </tbody></table>

     <table class="servicesT" id="myreport1" style="clear:
both; width: 100%; font-size: 13px; margin-top: 10px;
background-repeat: no-repeat; background-position: 50% 5%;">
                    <tbody id="reportbody1">

                    <?php
require_once "configure.php";
	 $i=0;
	 $cnt=mysql_query("select *  from subscriber where username='$username' ORDER BY subscriber_name");
	 while($row=mysql_fetch_array($cnt))
	 {
	 $id=$row[4];
     echo  "<tr ><td ></td><td >
     <input type='checkbox'  name='active$i' id='activate' value='yes' />
	 <input type='hidden' name='id$i' value='$row[1]'>
	 $row[0]&nbsp;&nbsp;<$row[1]><br />.................................................</td></tr>";
     $i++;
    }

  ?></tbody>
                </table>

</td></tr>
</table>
</form>

<?php
}
?>
<!-- Q-READ's Subscriber selection code ends here! !-->

       </td>
       <td width="0" valign="top">

	   
	 <!-- Q-READ's SMS Dropdown code starts here! !-->	   
	<div id="shortnews2" style="overflow: auto; width: 380px; height:
420px; padding: 0px; margin: 0px 0px 0px 0px; float: left; border: 2px
 solid rgb(247, 243, 247);">
        <div id="compose_contacts_div" style="margin: 0px 0px 0px 0px;
float: center; display: block;">
            <div style="z-index: 8;">
                <table class="servicesL" style="padding-top: 0px;
margin-left: -5px;" cellspacing="0">
                    <tbody>
   <!-- QREAD's SMS Dropdown code ends here! !-->	                         

	
	   
	   <h2><font color="red">Select SMS</font></h2>
	    <b>(Click on a message below to send)</b>
	   
    <!-- Q-READ's SMS selection starts here! !-->
	
			<div id="statediv">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" id="table_register">
        <tr height="30">
        <td ><strong>Select Category :</strong><font color="#ff0000">*</font></td></tr>
		<tr><td>
		<?php
			$select="select *  from sms_category ORDER BY category";
    $result=mysql_query($select) or die ("cannot select");

	?>
			<select name="category" onChange="getinformation(this.value)">
    <option value ="" selected="selected" >___s e le c t___</option>
    <?php
	
    while($row=mysql_fetch_array($result))
    {
     echo "<option value='$row[1]'>$row[0]</option>";
	}
    ?>
    </select>
   
	   
	</td>
  </tr>
</table>
</div>
<!-- Q-READ's SMS selection ends here! !-->	  

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

</body>
</html>
<?php

  
}
else
{
echo "<script>alert('Invalid User.. Register / login now to send SMS!');</script>";
echo "<script>document.location.href='create_group.php'</script>";
}
?>
