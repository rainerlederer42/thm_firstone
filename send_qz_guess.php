<?php

	// not sure if this one (=next one) is really necessary ........ 
	include_once "send_guess_reply_by_email.php";
	
	
	require_once "pear_mail.php";
	require_once "pear_mime.php";


	$cb1val = "off";
	$cb2val = "off";

	if(isset($_POST['firstName'])){
		$firstName = $_POST['firstName'];
	}
	
	if(isset($_POST['lastName'])){
		$lastName = $_POST['lastName'];
	}
	
	if(isset($_POST['companyname'])){
		$companyname = $_POST['companyname'];
	}

	if(isset($_POST['emailadr'])){
		$emailadr = $_POST['emailadr'];
	}
	
	// $theseanswers = $_POST[answercode];
	
	
	
	
	if(isset($_POST['checkbox-store'])){
        $cb1 = 'Store: ' . $_POST['checkbox-store'];
		$cb1val = $_POST['checkbox-store'];
    }


    if(isset($_POST['checkbox-marketing'])){
        $cb2 = 'Marketing: ' . $_POST['checkbox-marketing'];
		$cb2val = $_POST['checkbox-marketing'];
    }

	
	if(isset($_POST['my_qtype'])){
		$sub_qt = $_POST['my_qtype'];
	}
	
	if(isset($_POST['my_language'])){
		$sub_lang = $_POST['my_language'];
	}
	
	if(isset($_POST['my_antw1'])){
		$a1 = $_POST['my_antw1'];
	}	
	if(isset($_POST['my_antw2'])){
		$a2 = $_POST['my_antw2'];
	}
	if(isset($_POST['my_antw3'])){
		$a3 = $_POST['my_antw3'];
	}
	if(isset($_POST['my_antw4'])){
		$a4 = $_POST['my_antw4'];
	}
	if(isset($_POST['my_antw5'])){
		$a5 = $_POST['my_antw5'];
	}
	
	
	
	$theseanswers = '~' . $a1 . '/' . $a2 . '/' . $a3 . '/' . $a4 . '/' . $a5 . '~';
		
	// now R U right ? 
	// F: 	1 = 2, 2 = 3, 3 = 3, 4 = 1, 5 = 2
	// P: 	1 = 1, 2 = 4, 3 = 1, 4 = 1, 5 = 3
	
	$rf1 = 0;		
	$rf2 = 0;		
	$rf3 = 0;		
	$rf4 = 0;		
	$rf5 = 0;		
	$ges_richtig = 0;
	
	if ($sub_qt == 'F') {
		
		if ( $a1 == '2') {
		   $rf1 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}		
		if ( $a2 == '3') {
		   $rf2 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}				
		if ( $a3 == '3') {
		   $rf3 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}		
		if ( $a4 == '1') {
		   $rf4 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}		
		if ( $a5 == '2') {
		   $rf5 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}				
	}
	
	if ($sub_qt == 'P') {
		
		if ( $a1 == '1') {
		   $rf1 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}		
		if ( $a2 == '4') {
		   $rf2 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}				
		if ( $a3 == '1') {
		   $rf3 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}		
		if ( $a4 == '1') {
		   $rf4 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}		
		if ( $a5 == '3') {
		   $rf5 = 1;		
		   $ges_richtig = $ges_richtig + 1;
		}				
	}
	
	
	// ich konkatiniere das 'mal, obwohl $rfx ja kein String ist. 
	$auswertung = $rf1 . $rf2 . $rf3 . $rf4 . $rf5; 
	
	
	
     
    // echo("First Name: " . $firstName . " Last Name: " . $lastName);
	// echo("First Name: " . $firstName . " Last Name: " . $lastName . " CB-01: " . $cb1 . " CB-02: " . $cb2);
	echo("Ges-richtig: " . $ges_richtig . "  FName: " . $firstName . " LName: " . $lastName . " Comp: " . $companyname . " Email-Adr: ". $emailadr . " CB-01: " . $cb1val . " CB-02: " . $cb2val . " L=" . $sub_lang . " T=" . $sub_qt . " " . " Answ.: " . $theseanswers . ' Ausw=' . $auswertung);
	

   
   
   // let's copnstruct the ermail that I wanna send out 
   
   
	$sender = "bollogg@online.de";		// this is my POP3 Account that I'll always use 
										// for this kins of mails that are to be sent out.				
		
	
	$recipient = $emailadr;
		
											// this is just for testing !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  Duty ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ 
	$recipient = "bullogg@online.de";		// this is just for testing !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  Duty ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ 
											// this is just for testing !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  Duty ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ 
											// this is just for testing !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  Duty ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ ~~~ 
	

	$text = 'This is a text message.';    	//  falls html nicht möglich: 
											//  Diese Variable muss als "Fallback" den gleichen Inhalt aufweisen
											//  wie $html 
											
				


				
				
	// Das sind die verfügbaren Parameter hier an dieser Stelle: 
	
	// $cb1val 		Daten speichern erlaubt
	// $cb2val 		Marketing Aktivitäten erlaubt
	// $sub_lang	Sprache 
	// $firstName
	// $lastName
	// $companyname
	// $emailadr
	// $sub_qt		Quiz Typ
	// $rf1 - $rf5	Richtig=1 Falsch=0  für Frage 1 - 5, Quiz Typ bereits berücksichtigt
	// $rf1			Richtig=1 Falsch=0  für Frage 1, Quiz Typ bereits berücksichtigt
	// $rf1			Richtig=1 Falsch=0  für Frage 1, Quiz Typ bereits berücksichtigt
	// $rf1			Richtig=1 Falsch=0  für Frage 1, Quiz Typ bereits berücksichtigt
	// $rf1			Richtig=1 Falsch=0  für Frage 1, Quiz Typ bereits berücksichtigt
	
	
	
	
				
											
	$html = '';
	include_once "head-style-01.php";	// setzt $html_part01 = .......
	
	
	if ($sub_lang == 'D') {
		include_once "menob-de.php";
	} else 
	{
		include_once "menob-en.php";
	}
	  
	
	$html = $html_part01 . $html_part_men_ob;
	
	
	$html = $html . '';
	
	
	  $I_skip_this_area = 	
	  '<!-- Logo Left Nav Right + Vertical Padding : BEGIN -->
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
	  <!-- Logo Left Nav Right + Vertical Padding : END --> ';
	  
	 
	 $html = $html . '<br>' .
	 '<!-- Email Container : BEGIN -->
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
				  <td style="padding: 30px; font-family: sans-serif; font-size: 16px; line-height: 22px; color: #444444;">';
				  
				if ($sub_lang == "D") {
						$html = $html . '				  
						Vielen Dank f&uuml;r Ihre Teilnahme an unserem kleinen Quiz und f&uuml;r Ihr Interesse an wichtigen Sicherheitsstandards und an dem Thema &ldquo;Funktionale Sicherheit&rdquo;.<br>
						Von den insgesamt 5 Fragen haben Sie ' . $ges_richtig . ' richtig beantwortet. Hier nochmals die einzelnen Quizfragen und die jeweils richtigen L&ouml;sungen: <br><br>';
					} else
					{
						$html = $html . '				  
						Thank you for participating in our little quiz and for showing interest in important safety standards and in the area of &ldquo;functional safety&rdquo;.<br>
						From a total of 5 questions, you answered ' . $ges_richtig . ' questions correctly. Here you`ll find again the posed questions of the quiz, together with the respectively correct answers: <br><br>';
					}
					
				if ($sub_lang == "D") {										
						$txt_urteil1 = "falsch";
						if ($rf1 == 1) {
							$txt_urteil1 = "richtig";
						};
						$html = $html . '		  
						<span style="text-decoration: underline;">Frage 1: </span><br>
						Muss das CE-Zeichen grunds&auml;tzlich auf allen Betriebsmitteln angebracht werden, die in der Maschinenrichtlinie 98/37/EG beschrieben sind? 
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Korrekte Antwort :</span><br>
						Nein, es gibt auch frei handelsf&auml;hige Betriebsmittel ohne CE-Zeichen, die in der Maschinenrichtlinie beschrieben sind.</span>				
						<br>				
						<span style="color: #1081BF;">Ihre Antwort war ' . $txt_urteil1 . '. </span><br>
						<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   -->
						<br><br>';
					} else  // dann ist folglich   sub_lang == "E" 
					{
						$txt_urteil1 = "wrong";
						if ($rf1 == 1) {
							$txt_urteil1 = "right";
						};
						$html = $html . '		  
						<span style="text-decoration: underline;">Question 1: </span><br>
						Must the CE mark be applied to all items of equipment as described in the Machinery Directive 98/37/EU? 
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Correct answer :</span><br>
						No, there is also freely marketable equipment described in the Machinery Directive which does not need a CE mark.</span>				
						<br>				
						<span style="color: #1081BF;">Your answer was ' . $txt_urteil1 . '. </span><br>
						<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   -->
						<br><br>';
					}
					
					
				if ($sub_lang == "D") {										
						$txt_urteil2 = "falsch";
						if ($rf2 == 1) {
							$txt_urteil2 = "richtig";
						};
						$html = $html . '		  
						<span style="text-decoration: underline;">Frage 2: </span><br>
						Das CE-Zeichen auf einem Betriebsmittel dokumentiert grunds&auml;tzlich die &Uuml;bereinstimmung ...
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Korrekte Antwort :</span><br>
						mit allen zutreffenden, relevanten Richtlinien, die auf das Betriebsmittel anzuwenden sind.<br></span>
						<span style="color: #1081BF;">Ihre Antwort war ' . $txt_urteil2 . '. </span><br>
						<br><br>';
					} else  // dann ist folglich   sub_lang == "E" 
					{
						$txt_urteil2 = "wrong";
						if ($rf2 == 1) {
							$txt_urteil2 = "right";
						};
						$html = $html . '
						<span style="text-decoration: underline;">Question 2: </span><br>
						Equipment with a CE mark documents compliance ...
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Correct answer :</span><br>
						with all relevant directives applicable to the equipment.<br></span>
						<span style="color: #1081BF;">Your answer was ' . $txt_urteil2 . '. </span><br>
						<br><br>';
					}
					
					if ($sub_lang == "D") {										
						$txt_urteil3 = "falsch";
						if ($rf3 == 1) {
							$txt_urteil3 = "richtig";
						};
						$html = $html . '		  					
						<span style="text-decoration: underline;">Frage 3: </span><br>
						Verantwortlich f&uuml;r eine Maschine/ein Betriebsmittel ist der ... 
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Korrekte Antwort :</span><br>
						Inverkehrbringer. <br></span>
						<span style="color: #1081BF;">Ihre Antwort war ' . $txt_urteil3 . '. </span><br>
						<br><br>';					
					} else  // dann ist folglich   sub_lang == "E" 
					{
						$txt_urteil3 = "wrong";
						if ($rf3 == 1) {
							$txt_urteil3 = "right";
						};
						$html = $html . '
						<span style="text-decoration: underline;">Question 3: </span><br>
						The person or company responsible for equipment is the ... 
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Correct answer :</span><br>
						distributor. <br></span>
						<span style="color: #1081BF;">Your answer was ' . $txt_urteil3 . '. </span><br>
						<br><br>';
					}
					
					if ($sub_lang == "D") {										
						$txt_urteil4 = "falsch";
						if ($rf4 == 1) {
							$txt_urteil4 = "richtig";
						};
						$html = $html . '		  										
						<span style="text-decoration: underline;">Frage 4: </span><br>
						Zu Richtlinien f&uuml;r den europ&auml;ischen Binnenmarkt gibt es harmonisierte Normen. Die Anwendung dieser Normen ist ... 
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 11px;"> Korrekte Antwort :</span><br>
						grunds&auml;tzlich freiwillig. <br></span>
						<span style="color: #1081BF;">Ihre Antwort war ' . $txt_urteil4 . '. </span><br>
						<br><br>';
					} else  // dann ist folglich   sub_lang == "E" 
					{
						$txt_urteil4 = "wrong";
						if ($rf4 == 1) {
							$txt_urteil4 = "right";
						};
						$html = $html . '					
						<span style="text-decoration: underline;">Question 4: </span><br>
						There are harmonized standards applying to the European Directives. The application of such a standard is ... 
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 11px;"> Correct answer :</span><br>
						voluntary. <br></span>
						<span style="color: #1081BF;">Your answer was ' . $txt_urteil4 . '. </span><br>
						<br><br>';
					}
					
					
					if ($sub_lang == "D") {										
						$txt_urteil5 = "falsch";
						if ($rf5 == 1) {
							$txt_urteil5 = "richtig";
						};
						$html = $html . '		  					
						<span style="text-decoration: underline;">Frage 5: </span><br>
						F&uuml;r die in der Maschinenrichtlinie in Anhang IV genannten Maschinentypen <br>muss grunds&auml;tzlich ...
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Korrekte Antwort :</span><br>
						die Einbindung einer europ&auml;ischen benannten Stelle erfolgen. <br></span>
						<span style="color: #1081BF;">Ihre Antwort war ' . $txt_urteil5 . '. </span><br>
						<br>';
					} else  // dann ist folglich   sub_lang == "E" 
					{
						$txt_urteil5 = "wrong";
						if ($rf5 == 1) {
							$txt_urteil5 = "right";
						};				
						$html = $html . '		  					
						<span style="text-decoration: underline;">Question 5: </span><br>
						For the types of machines specified in the Machinery Directive in appendix IV it is necessary ...
						<br><span style="line-height: 12px;"><br></span>
						<span style="font-style: italic;"><span style="font-size: 12px;"> Correct answer :</span><br>
						to involve a European listed notified body. <br></span>
						<span style="color: #1081BF;">Your answer was ' . $txt_urteil5 . '. </span><br>
						<br>';
					}	
					


					
					$html = $html . '				  
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
			Rainer Lederer &bull; c/o HAMI GmbH, Bassert Albermann Strasse 28, 68782 Bruhl, Germany &bull; (49) 6202 709-202<br><br>
			
			
		  </td>
		</tr>
	  </table>
	  <!-- Footer : END -->

	</td></tr></table>
	</body>
	</html>';
	
	
	
	
		$subject = "Einladung (2) zum Online-Wettkampf";

	
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
		$username = "hami-quiz@online.de";
		$password = "hami-quiz_rl";
 
 
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


	

	
	
	
?>