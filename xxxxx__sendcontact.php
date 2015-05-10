<?php

	$cb1val = "off";
	$cb2val = "off";

	if(isset($_POST['firstName'])){
		$firstName = $_POST['firstName'];
	}
	
	if(isset($_POST['lastName'])){
		$lastName = $_POST['lastName'];
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
	
	if ($sub_qt == 'F') {
		
		if ( $a1 == '2') {
		   $rf1 = 1;		
		}		
		if ( $a2 == '3') {
		   $rf2 = 1;		
		}				
		if ( $a3 == '3') {
		   $rf3 = 1;		
		}		
		if ( $a4 == '1') {
		   $rf4 = 1;		
		}		
		if ( $a5 == '2') {
		   $rf5 = 1;		
		}				
	}
	
	if ($sub_qt == 'P') {
		
		if ( $a1 == '1') {
		   $rf1 = 1;		
		}		
		if ( $a2 == '4') {
		   $rf2 = 1;		
		}				
		if ( $a3 == '1') {
		   $rf3 = 1;		
		}		
		if ( $a4 == '1') {
		   $rf4 = 1;		
		}		
		if ( $a5 == '3') {
		   $rf5 = 1;		
		}				
	}
	
	
	
	// ich konkatiniere das 'mal, obwohl $rfx ja kein String ist. 
	$auswertung = $rf1 . $rf2 . $rf3 . $rf4 . $rf5; 
	
	
	
     
    // echo("First Name: " . $firstName . " Last Name: " . $lastName);
	// echo("First Name: " . $firstName . " Last Name: " . $lastName . " CB-01: " . $cb1 . " CB-02: " . $cb2);
	echo("FName: " . $firstName . " LName: " . $lastName . " CB-01: " . $cb1val . " CB-02: " . $cb2val . " L=" . $sub_lang . " T=" . $sub_qt . " " . " Answ.: " . $theseanswers . ' Ausw=' . $auswertung);
	
	
	
	
	
?>