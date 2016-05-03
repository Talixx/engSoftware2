
<br>
<br>
<br>
<br>
<br>

<br>

<?php 

 $name  = $_POST["name"];
 $email = $_POST["email"];
 $mobile   = $_POST["mobile"];
 $msg   = $_POST["msg"];
 $to = "liandro@amplisoftware.com.br";
echo "<br>";
if (isset($name) && isset($email)) {
   $subject = "$name sent you a message via FlatHost";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
		$msg     = "From: $name<br/> Email: $email <br/> Mobile: $mobile <br/>Message: $msg";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail){
		echo 'success';
	}else{
		echo 'failed';
	}
}

//isset($email) && isset($name) && isset($msg)
?>
