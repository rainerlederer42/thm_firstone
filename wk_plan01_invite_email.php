<?php
  // require_once "mail.php";			// das steht bei Gandalf in 	E:\XAMPP\PHP\PEAR\  ==> Datei mail.php
  require_once "pear_mail.php";		// hier im gleichen Verzeichnis. entsprechend umkopiert   140622 
  
  //require_once "Mail/mime.php";		// new 140111 for HTML Email  ---  auf Gandalf E: in \xampp\php\PEAR\Mail      
  require_once "pear_mime.php";		// hier im gleichen Verzeichnis. entsprechend umkopiert   140622 
  
?>
<?php
function invite_by_mail_to_new_wk1 ($crea_vn, $crea_nn, $crea_datti_ger, $wkbez1, $wkbez2, $start_datti_ger, $ende_datti_ger, $this_recip_vn, $this_recip_nn, $this_recip_e, $this_recip_link)
{
	 
	 // invite_by_mail_to_new_wk1 ($crea_vn, $crea_nn, $crea_datti_ger, $wk_bez1, $wk_bez2, $start_datti_ger, $ende_datti_ger, $this_recip_vn, $this_recip_nn, $this_recip_e, $this_recip_link);
	 
	 
		$sender = "bollogg@online.de";
		
		// $to = "bullogg@online.de";
		$recipient = "bullogg@online.de";		
		
		
	   
	   
		
		
		$text = 'This is a text message.';    	//  falls html nicht möglich: 
												//  Diese Variable muss als "Fallback" den gleichen Inhalt aufweisen
												//  wie $html 
												
	   
		// $html = '<html><body><p>This is a html message</p></body></html>';		// Vorlage Tutorial-1361762 	   
	   
		
		// merke: 	<b> für Fettschrift funzt 
		//			<bold>  funzt nicht (Email wird aber zugestellt)
		//			<strong>  funzt nicht (Email wird nicht zugestellt)		
		//			<p style="color:#FF6699;font-size:30px">This is styled text !!! </p>  ==> funzt, wenn "px" als Einheit angegeben. 
		
		//			<font color="#FF0000"> innerhalb <p> funzt.
		//			<img src="sbspics/cy01.JPG" width="207" height="123" alt="" />'
		//				funzt dann, wenn auch gemacht wird (!): 
		//				$mime->addHTMLImage('sbspics/cy01.JPG', 'image/jpeg');
		//			


		
	    $html = '<html><body><h1>Jabbadabba</h1><h2>DUUUUUUuuuuuuuuuuuuuuuuu</h2><br />';
	    $html = $html . '<p>This is a trial message</p>';
		
		
		$html = $html . '<p>This is a <b>ABCDEFG </b>message</p>';			 // Email funzt mit b, der Text is dann auch wirklich fett !
		$html = $html . '<p>This is a <font color="#FF0000">ABCDEFG </font>message</p>';		
		$html = $html . '<img src="sbspics/cy01.JPG" width="207" height="123" alt="" />';	// dafür notwendig:  $mime->addHTMLImage('sbspics/cy01.JPG', 'image/jpeg'); 		
		$html = $html . '<p>This is a <i><font color="#FF0000">ABCDEFG und kursiv </font></i>message</p>';
		
		
		
		// Playing around with this   140112
		$html = $html . '<p style="color:#FF6699;font-size:30px">This is styled text !!! </p>';	 
		$html = $html . '<p style="color:#006699;font-weight:bold;font-size:30px">This is styled text !!! </p>';	 // dann wird keine Mail verschickt 
		
		
		$html = $html . '<p>This is a trial message</p>';
		
		// $html = $html . '<p style="color:#4C4C4C;font-weight:bold;font-family:Calibri;font-size:20">This is a tral message</p>';
	   
	    $html = $html . '</body></html>';
	   
	   
	   $html = '<html><body><br />';
	   $html = $html . '<img src="sbspics/sbs_002c.jpg" width="499" height="149" alt="" />';	// dafür notwendig:  $mime->addHTMLImage('sbspics/cy01.JPG', 'image/jpeg'); 		
		// Groeesse ori = 997 x 297, halbiere ich auf  499 x 149 
		$html = $html . "<h1>" . $wkbez1 . "";
		if(!empty($wkbez2))
		{
			$html = $html . "<br />" . $wkbez2 . "</h1>";		
		}
		else 
		{
			$html = $html . "</h1>";		
		}
	   $html = $html . "Hallo " . $this_recip_vn . " " . $this_recip_nn . ",";
	   $html = $html . "<p>Sie wurden f&uuml;r den o.g. Online-Wettkampf nominiert."; 
	   $html = $html . " Dieser Wettkampf wurde von " . $crea_vn . " " . $crea_nn . " am " . $crea_datti_ger . " geplant.</p>"; 
	   
	   // Verbesserungsvorschlag: Hier könnte die Disziplin gut stehen !!!! 
	   
	   $html = $html . "<p><h3>Start: " . $start_datti_ger . "<br />";
	   $html = $html . "Ende: " . $ende_datti_ger . "</h3></p>";
	   
	   $html = $html . "<p>Bitte best&auml;tigen Sie Ihre Teilnahme, indem Sie diesen Link ~~~" . $this_recip_link . "~~~ benutzen.";
	   $html = $html . " Dort finden Sie auch die Kontaktdaten beider Mannschaftsf&uuml;hrer.</p>";
	   $html = $html . '<p style="color:#006699;font-weight:lighter">Dies ist eine automatisch generierte E-Mail. Bitte schicken Sie keine Antwort E-Mail an diese Absender E-Mail Adresse.</p>';	 
	   $html = $html . "<p>Mit Sch&uuml;tzengruss<br />";
	   $html = $html . "Online Portal f&uuml;r Sportschiessen<br />";
	   $html = $html . "http://www.shooting-competition.de</p>";

	   
	   
	   
	   
	   $html = $html . '</body></html>';
	   
		//$recipient = $this_recip_e
	 
		$subject = "Einladung zum Online-Wettkampf";
	 
		$body = "Hallo " . $this_recip_vn . " " . $this_recip_nn . ",\n\n";
		$body = $body . "Dies ist eine Einladung zum Online-Wettkampf, \n\n" . $wkbez1 . "\n\n" ;
		$body = $body . $wkbez2 . "\n\n" ;
		$body = $body . "Dieser Wk wurde von " . $crea_vn . " " . $crea_nn . " am " . $crea_datti_ger . " geplant.  \n\n";
		$body = $body . "Der Wk findet wie folgt statt: \n\n";
		$body = $body . "Start: " . "\n\n";
		$body = $body . "Start: " . $start_datti_ger . " Ende: " . $ende_datti_ger . "\n\n";
		 
	 
	 
		$body = $body . "\n\n Bitte bestaetigen Ihre Teilnahme indem Sie diesen Link ~~~" . $this_recip_link . "~~~ benutzen \n\n";
		$body = $body . "Dort finden Sie auch die Kontaktdaten beider Mannschaftsführer. \n\n";
	 
	 	   
	
		$crlf = "\n";
	 
		$headers = array(
			'From'          => $sender,
            'Return-Path'   => $sender,
            'Subject'       => $subject
                        );
		
		$mime = new Mail_mime($crlf);		
		
		// Setting the body of the email
        $mime->setTXTBody($text);				
        $mime->setHTMLBody($html);				
		
		$mime->addHTMLImage('sbspics/sbs_002c.jpg', 'image/jpeg');		// für (s.o.  '<img src="sbspics/cy01.JPG" .....   
 
		$body = $mime->get();						
		$headers = $mime->headers($headers);		
 
 
		$host = "smtp.1und1.de";
		$port = "587";		//Angabe von 1und1     Ansonsten: 465  
		$username = "bollogg@online.de";
		$password = "walkman1";
 
 
		$smtp = Mail::factory("smtp",array("host" => $host,
                      "port" => $port,
                      "auth" => true,
                      "username" => $username,
                      "password" => $password));

		$mail = $smtp->send($recipient, $headers, $body);

 
		if (PEAR::isError($mail)) 
		{
			echo("<p>" . $mail->getMessage() . "</p>");
		} else {
			echo("<p>Message successfully sent!</p>");
		}
 

echo "\n";  

}


?>