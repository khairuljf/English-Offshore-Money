<?php
if($_REQUEST['xAction'] == 'sendMail'){
	if($_REQUEST['g-recaptcha-response'] != ""){
		$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf5rhwTAAAAAGsaURfwiByZJqqLNpCBkTfPns4V&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
		if($response.success==false){
			echo "SPAM";	
		}else{
			$to = "info@offshore.money";
			$subject = "Quote";
			$message = "Company: " . $_REQUEST['company'];
			$message .= "<br>First name: " . $_REQUEST['first_name'];
			$message .= "<br>Last name: " . $_REQUEST['last_name'];
			$message .= "<br>Phone: " . $_REQUEST['phone'];
			$message .= "<br>Mobile: " . $_REQUEST['mobile'];
			$message .= "<br>Email: " . $_REQUEST['email'];		
			
			$headers  = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
			$headers .= "From: info <info@offshore.money>". "\r\n";
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfhdSUTAAAAAD5Q60lCWyG_XokhBcWsPwt43GgV&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR'], true);
			
			if( mail($to, $subject, $message, $headers) ) {
				echo "OK";
			} else {
				echo "ERR";
			}
		}
	}else{
		echo "INVALID";	
	}
}