
<?php
  if(isset($_POST['email'])){

	$name =$_POST["name"];
	$from =$_POST["email"];
  $telephone =$_POST["telephone"];
	$subject=$_POST["subject"];
	$comment=$_POST["comment"];

	// Email Receiver Address
	$receiver="m.escoffier@elecom.fr, e.philippe@table-tactile.fr,contact@table-tactile.fr,k.mihoub@elecom.fr,f.carpentier@elecom.fr,s.rousseaux@elecom.fr,guillaume.gervat@table-tactile.fr,l.ferrandini@elecom.fr,m.rousseaux@table-tactile.fr";
	$subject=$_POST["subject"];

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body style='background-color:#232323;'>
	<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='https://www.table-tactile.fr/images/logo-white-min.png'></td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF214F; padding:7px 5px 7px 0;'>Name:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#fff; padding:7px 0 7px 5px;'>".$name."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF214F; padding:7px 5px 7px 0;'>Email:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#fff; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
  <tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF214F; padding:7px 5px 7px 0;'>Téléphone:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#fff; padding:7px 0 7px 5px;'>".$telephone."</td>
	</tr>
		<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF214F; padding:7px 5px 7px 0;'>Subject:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#fff; padding:7px 0 7px 5px;'>".$subject."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF214F; padding:7px 5px 7px 0;'>Message:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#fff; padding:7px 0 7px 5px;'>".nl2br($comment)."</td>
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
      echo "Le message a été envoyé !";
   }
   else
   {
   	 //Fail Message
      echo "Le message n'a pas pu être envoyé !";
   }

}
?>
