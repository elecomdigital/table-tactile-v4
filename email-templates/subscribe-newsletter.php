
<?php
  if(isset($_POST['email'])){
	$from =$_POST["email"];

	// Email Receiver Address
	$receiver="contact@table-tactile.fr,c.laporte@elecom.fr,f.carpentier@elecom.fr,s.rousseaux@elecom.fr";
	$subject="Subscribe Newsletter form details";

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='https://www.table-tactile.fr/uploads/00ea543616af1f3b4c4969a3a356852f.png?20170421' ></td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
	</table>
	</body>
	</html>
	";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";
   if(mail($receiver,$subject,$message,$headers))
   {
	   //Success Message
      echo "The message has been sent!";
   }
   else
   {
   	 //Fail Message
      echo "The message could not been sent!";
   }

}
?>
