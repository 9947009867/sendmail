<?php
header("Access-Control-Allow-Origin: *");
include("mail/gmail.php");
$toemail = $_POST['email'];
$msg=$_POST['message'];

$resultfrmmail=  sendmail($toemail, 'Mail from JSP to Php', $msg);
echo $resultfrmmail;

?>