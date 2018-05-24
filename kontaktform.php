<?php
// Handling
	if(isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		 
		$emailTil = "mydailyspace@signepetersen.dk";
		$emailEmne = "Kontaktformular";
		$emailBesked = "Fra: " . $name . "\n\nE-mail Adresse: " . $email . "\n\nBesked:\n" . $msg;
		
		// EmailTil samme mail pga one.com begrænsninger
		$headers = 'From: ' . $emailTil . '' . "\r\n" .
		'Reply-To: ' . $email . '' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		mail($emailTil, $emailEmne, $emailBesked, $headers);
		
        
        header("Location: kontakt.php?sendt");
	}



?>
