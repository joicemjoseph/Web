<?/* php
if(isSet($_POST['username']))
{
$usernames = array('john','michael','terry', 'steve', 'donald');

$username = $_POST['username'];

if(in_array($username, $usernames))
	{
	echo '<font color="red">The nickname <STRONG>'.$username.'</STRONG> is already in use.</font>';
	}
	else
	{
	echo 'OK';
	}
}
*/

// This is a sample code in case you wish to check the username from a mysql db table

if(isSet($_POST['username']))
{
$username = $_POST['username'];

require_once "configure.php";

$sql_check = mysql_query("select id from user where username='"$username."'") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo '<font color="#FF2020">The username <STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo '<font color="#008000">The username <STRONG>'.$username.'</STRONG> is available.</font>';
}

}

?>
