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
	   
	   
	   
	   
	   
	   
	   //
	   //
	   //	   
	   // Start Mega-Aenderung  140710   Insert aus   Cerberus-master/template-default.html   (Stand 100714 1049) 
	   //
	   //
	   //
	   
		// 			evtl kann das hier mit include_once wesentlich verbessert werden !!!!!!!!!!!!!!!!!!!!!!!!!!!!
		
		$html = '';
		
		//   und da zwischen rein, zwischen die zwei Ticks   kommt jetzt der gesamte Inhalt von   Cerberus-master/template-default.html,   ohne die allererste Zeile mit  Doctype
		//    P.S.:   drauf achten, dass da nirgends ein Tick drin steht.   Irgendwo habe ich ein it's   bekämpft   und noch ein paar weitere Ticks    !!!! 
		//    ergiebt dann: 
		
	
		include_once "head-style-01.php";	

	
		
		


  $html = $html_part01 .  '<!-- Logo Left, Nav Right, 100% Nav Bar : BEGIN -->
  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" bgcolor="#555555" style="text-align: center;">
    <tr>
      <td>
        <table border="0" width="600" cellpadding="0" cellspacing="0" align="center" style="margin: auto;" class="email-container">
          <tr>
            <td height="10" style="font-size: 0; line-height: 0;">&nbsp;</td>
          </tr>
          <tr>
            <td class="hh-force-col-center" valign="middle" style="text-align: left;">
			  <!--	
              <img src="http://placehold.it/200x40/888888/555555" alt="alt text" height="40" width="200" border="0">
			  -->
			  <img src="140707_HAMI_better-safe__06__200x51_004t.png" alt="alt text" height="51" width="200" border="0">
            </td>
            <td class="hh-force-col-center" valign="middle" style="padding: 10px 0;text-align: right;">
              <a href="http://www.hami.com/" style="color: #ffffff;font-family: sans-serif;">HAMI webpage</a>&nbsp;&nbsp;
              <a href="http://www.hami.com/Contact/default.php" style="color: #ffffff;font-family: sans-serif;">Contact</a>&nbsp;&nbsp;
              <a href="http://www.hami.com/Search.php" style="color: #ffffff;font-family: sans-serif;">Search</a>
            </td>
          </tr>
          <tr>
            <td height="10" style="font-size: 0; line-height: 0;">&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <!-- Logo Left, Nav Right, 100% Nav Bar : END -->
  
  <!-- Logo Left Nav Right + Vertical Padding : BEGIN -->
  <table border="0" width="600" cellpadding="0" cellspacing="0" align="center" class="email-container" style="margin: auto;">
    <tr>
      <td height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
    </tr>
    <tr>
      <td class="force-col-center" valign="middle" style="padding: 20px 0;text-align: left;">
		<!-- 
        <img src="http://placehold.it/300x75/888888/7777777" alt="alt text" height="75" width="300" border="0">
		-->
		<img src="140707_HAMI_better-safe__05__300x77.png" alt="alt text" height="77" width="300" border="0">		
		
      </td>
      <td class="force-col-center" valign="middle" style="padding: 20px 0;text-align: right;">
        <a href="#" style="font-family: sans-serif;color: #444;">Link 1</a>&nbsp;&nbsp;
        <a href="#" style="font-family: sans-serif;color: #444;">Link 2</a>&nbsp;&nbsp;
        <a href="#" style="font-family: sans-serif;color: #444;">Link 3</a>
      </td>
    </tr>
    <tr>
      <td height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
    </tr>
  </table>
  <!-- Logo Left Nav Right + Vertical Padding : END -->
 
  <!-- Email Container : BEGIN -->
  <!-- This table wraps the whole body email within its width (600px), sets the background color (white) and border (thin, gray, solid) -->
    <table border="0" width="600" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" style="border: 1px solid #e5e5e5;margin: auto;" class="email-container">
  
      <!-- Single Fluid Image, No Crop : BEGIN -->
      <tr>
        <td>
		  <!-- 
          <img src="http://placehold.it/600x350/888888/7777777" alt="alt text" height="350" width="600" border="0" style="display: block;" class="fluid">
		  --> 
		  <img src="140708_Hyp_About_600x350_F145_002.png" alt="Hima Himax" height="350" width="600" border="0" style="display: block;" class="fluid">
		  
        </td>
      </tr>
      <!-- Single Fluid Image, No Crop : END -->
    
      <!-- Full Width, Fluid Column : BEGIN -->
	  <!-- color 444444 == dunkelgrau -->
	  <!-- color 1081BF 16,129,191 == logo-blau   http://www.color-hex.com/color/1081bf -->
	  
      <tr>
        <td style="border-bottom: 1px solid #e5e5e5;">
          <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
            <tr>
              <td style="padding: 30px; font-family: sans-serif; font-size: 16px; line-height: 22px; color: #444444;">
			  
			    Vielen Dank f&uuml;r Ihre Teilnahme an unserem kleinen Quiz und f&uuml;r Ihr Interesse an wichtigen Sicherheitsstandards und an dem Thema &ldquo;Funktionale Sicherheit&rdquo;.<br>
				Von den insgesamt 5 Fragen haben Sie 5 richtig beantwortet. Hier nochmals die einzelnen Quizfragen und die jeweils richtigen L&ouml;sungen: <br><br>
			  
				<span style="text-decoration: underline;">Frage 1: </span><br>
				Muss das CE-Zeichen grunds&auml;tzlich auf allen Betriebsmitteln angebracht werden, die in der Maschinenrichtlinie 98/37/EG beschrieben sind? 
				<br><span style="line-height: 12px;"><br></span>
				<span style="font-style: italic;"><span style="font-size: 12px;"> korrekte Antwort :</span><br>
				Nein, es gibt auch frei handelsf&auml;hige Betriebsmittel ohne CE-Zeichen, die in der Maschinenrichtlinie beschrieben sind.</span>				
				<br>				
				<span style="color: #1081BF;">Ihre Antwort war richtig. </span><br>
				<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   -->
				<br><br>
				<span style="text-decoration: underline;">Frage 2: </span><br>
				Das CE-Zeichen auf einem Betriebsmittel dokumentiert grunds&auml;tzlich die &Uuml;bereinstimmung ...
				<br><span style="line-height: 12px;"><br></span>
				<span style="font-style: italic;"><span style="font-size: 12px;"> korrekte Antwort :</span><br>
				mit allen zutreffenden, relevanten Richtlinien, die auf das Betriebsmittel anzuwenden sind.<br></span>
				<span style="color: #1081BF;">Ihre Antwort war richtig. </span><br>
				<br><br>
				<span style="text-decoration: underline;">Frage 3: </span><br>
				Verantwortlich f&uuml;r eine Maschine/ein Betriebsmittel ist ... 
				<br><span style="line-height: 12px;"><br></span>
				<span style="font-style: italic;"><span style="font-size: 12px;"> korrekte Antwort :</span><br>
				der Inverkehrbringer. <br></span>
				<span style="color: #1081BF;">Ihre Antwort war richtig. </span><br>
				<br><br>
				<span style="text-decoration: underline;">Frage 4: </span><br>
				Zu Richtlinien f&uuml;r den europ&auml;ischen Binnenmarkt gibt es harmonisierte Normen. Die Anwendung dieser Normen ist ... 
				<br><span style="line-height: 12px;"><br></span>
				<span style="font-style: italic;"><span style="font-size: 11px;"> korrekte Antwort :</span><br>
				grunds&auml;tzlich freiwillig. <br></span>
				<span style="color: #1081BF;">Ihre Antwort war richtig. </span><br>
				<br><br>
				<span style="text-decoration: underline;">Frage 5: </span><br>
				F&uuml;r die in der Maschinenrichtlinie in Anhang IV genannten Maschinentypen <br>muss grunds&auml;tzlich ...
				<br><span style="line-height: 12px;"><br></span>
				<span style="font-style: italic;"><span style="font-size: 12px;"> korrekte Antwort :</span><br>
				die Einbindung einer europ&auml;ischen benannten Stelle erfolgen. <br></span>
				<span style="color: #1081BF;">Ihre Antwort war richtig. </span><br>
				<br>
			
					
					
			  
				<!--	
                Ulla nec est tristique, tempor lacus eu, aliquam erat. Cras tristique, arcu ac tristique hendrerit, urna diam mollis libero, vitae gravida nisi lectus in leo. Aenean eu ligula id nisi euismod dapibus et eu mauris. Donec quis dictum velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                <br><br>
                Donec nulla ante, cursus sit amet egestas ut, facilisis ut neque. Nullam sed est lorem. Aenean pharetra metus nisl, eu lacinia ante cursus quis. Integer facilisis elementum mi, sed auctor leo posuere sed. Nulla facilisi.
				-->
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- Full Width, Fluid Column : END -->
  
      <!-- Two Columns, With Padding ==> Stacked Layout : BEGIN -->      
      <!-- Two Columns, With Padding ==> Stacked Layout : END -->
      
      <!-- Two Columns, One Column Without Padding ==> Stacked Layout : BEGIN -->      
      <!-- Two Columns, One Column Without Padding ==> Stacked Layout : END -->
      
      <!-- Three Column ==> Stacked Wide Layout ==> Stacked Narrow Layout : BEGIN -->
      <tr>
        <td style="padding: 30px;">
          <table border="0" cellpadding="0" cellspacing="0" class="columns-container">
            <tr>
              <td width="160" style="padding-right: 30px;font-family: sans-serif; font-size: 16px; line-height: 22px;color: #444444;" valign="top" class="force-col">
			    <!--
                <img src="http://placehold.it/160/888888/7777777" alt="alt text" align="center" height="160" width="160" border="0" style="display: block;padding-bottom: 10px;" class="col-3-img-r">
				-->
				<img src="121c_01_F145_160x160.png" alt="alt text" align="center" height="160" width="160" border="0" style="display: block;padding-bottom: 10px;" class="col-3-img-r">
			    
                <a href="http://www.hami.com/" style="color:#444444; font-weight:bold">HAMI webpage</a><br>
				<!--
                These columns appear three across on wide screens...
				-->
				Click here to visit the HAMI webpage and read more about its products and services.
              </td>
              <td style="font-size: 0; line-height: 0; display: none;" class="hh-spacer">&nbsp;</td>
              <td width="160" style="padding-right: 30px;font-family: sans-serif; font-size: 16px; line-height: 22px;color: #444444;" valign="top" class="force-col">
				<!-- 
                <img src="http://placehold.it/160/888888/7777777" alt="alt text" align="center" height="160" width="160" border="0" style="display: block;padding-bottom: 10px;" class="col-3-img-l">
				--> 
				<img src="20a_01_F145_160x160.png" alt="alt text" align="center" height="160" width="160" border="0" style="display: block;padding-bottom: 10px;" class="col-3-img-l">
                <a href="http://www.hami.com/Contact/default.php" style="color:#444444; font-weight:bold">Contact</a><br>
                Find a contact person at HIMA and get in touch 
              </td>
              <td style="font-size: 0; line-height: 0; display: none;" class="hh-spacer">&nbsp;</td>
              <td width="160" style="font-family: sans-serif; font-size: 16px; line-height: 22px;color: #444444;" valign="top" class="force-col">
			    <!--
                <img src="http://placehold.it/160/888888/7777777" alt="alt text" align="center" height="160" width="160" border="0" style="display: block;padding-bottom: 10px;" class="col-3-img-r">
				-->
				<img src="002_01__F145_160x160.png" alt="alt text" align="center" height="160" width="160" border="0" style="display: block;padding-bottom: 10px;" class="col-3-img-r">
                <a href="http://www.hami.com/Search.php" style="color:#444444; font-weight:bold">Search</a><br>
								Find useful information on the HAMI webpage
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- Three Column ==> Stacked Wide Layout ==> Stacked Narrow Layout : END -->

  </table>
  <!-- Email Container : END -->
  
  <!-- Footer : BEGIN -->
  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" class="email-container">
    <tr>
      <td style="text-align: center;padding: 20px;font-family: sans-serif; font-size: 12px; line-height: 18px;color: #888888;">
	    <!--
        If you no longer wish to receive these emails, you can <unsubscribe style="color: #444444; padding: 0;text-decoration: underline">unsubscribe</unsubscribe>.<br>
        Company Name &bull; 123 Fake Street, SpringField, Oregon 97477 US &bull; <span class="mobile_link">(123) 456-7890</span><br><br>		
		-->
		Please note that this project is <span style="color: #444444; padding: 0;text-decoration: underline">not</span> a HAMI product. It had been devised, drafted and implemented by <br>
		Rainer Lederer &bull; c/o HAMI GmbH, Albert Bassermann Strasse 28, 68782 Bruhl, Germany &bull; (49) 6202 709-202<br><br>
		
		
      </td>
    </tr>
  </table>
  <!-- Footer : END -->

</td></tr></table>
</body>
</html>';
		
		
		
		
		


	   
	   //
	   //
	   //	   
	   // Ende Mega-Aenderung  140710   Insert aus   Cerberus-master/template-default.html   (Stand 100714 1049) 
	   //
	   //
	   //
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
		//$recipient = $this_recip_e
	 
		$subject = "Einladung zum Online-Wettkampf";
	 
		
			// 140710   $body wird vmtl. hier so nicht verwendete. Es gilt, was in $html steht. 
			//  vmtl können die nächsten paar Zeilen gelöscht werden. 
		


		
		
		
		
		
	 
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
            'Subject'       => $subject,
			'To'       		=> $recipient
                        );
		
		$mime = new Mail_mime($crlf);		
		
		// Setting the body of the email
        $mime->setTXTBody($text);				
        $mime->setHTMLBody($html);				
		
		// vor Cerberus     $mime->addHTMLImage('sbspics/sbs_002c.jpg', 'image/jpeg');		// für (s.o.  '<img src="sbspics/cy01.JPG" .....   
		$mime->addHTMLImage('140708_Hyp_About_600x350_F145_002.png', 'image/png');		// für (s.o.  '<img src="" .....   
		
		// und neu, ebanfalls nach Cerberus   140710 
		
		$mime->addHTMLImage('121c_01_F145_160x160.png', 'image/png');		// für (s.o.  '<img src="" .....   
		$mime->addHTMLImage('20a_01_F145_160x160.png', 'image/png');		// für (s.o.  '<img src="" .....   
		$mime->addHTMLImage('002_01__F145_160x160.png', 'image/png');		// für (s.o.  '<img src="" .....   
			
		$mime->addHTMLImage('140707_HAMI_better-safe__06__200x51_004t.png', 'image/png');		// für (s.o.  '<img src="" .....   
		$mime->addHTMLImage('140707_HAMI_better-safe__05__300x77.png', 'image/png');			// für (s.o.  '<img src="" .....   
		$mime->addHTMLImage('140707_HAMI_better-safe__05__200x40.png', 'image/png');			// für (s.o.  '<img src="" .....   
		
 
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