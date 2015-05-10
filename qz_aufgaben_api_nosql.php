<?php 

  //--------------------------------------------------------------------------
  // this will retrieve the questions from the table "aufgabe" 
  //--------------------------------------------------------------------------
  
  //-
  //-	Diese Kommentare sind vom 140615
  //-
  
  
  //- $host = "212.116.4.136";
  //- $user = "hima_ssweb";
  //- $pass = "ssweb";

  //- $databaseName = "himadata";
  //- $tableName = "aufgabe";

  //-//--------------------------------------------------------------------------
  //-// 1) Connect to mysql database
  //-//--------------------------------------------------------------------------
  //-// die Daten stehen ja schon hier drin, oben !!!       include 'DB.php';
  
  //- // echo $host;
  //- // echo $user;
  //- // echo $pass;
  
  
  //-$con = mysql_connect($host,$user,$pass);
  //-$dbs = mysql_select_db($databaseName, $con);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  // $result = mysql_query("SELECT * FROM $tableName");          //query
  // $result = mysql_query("SELECT * FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");          //query
  
  
  
  // $result = mysql_query("SELECT nummer, sprache, quiz, frage, antwort1, antwort2 FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");          //query
  // $result = mysql_query("SELECT frage, nummer, sprache, quiz, frage, antwort1, antwort2 FROM $tableName where quiz like 'HIMA_FSCS_%' and nummer=3 and sprache='E' order by quiz,nummer,sprache");          //query
  // $result = mysql_query("SELECT frage, nummer, sprache, quiz, frage, antwort1, antwort2 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='E' order by quiz,nummer,sprache");
  // $result = mysql_query("SELECT frage, nummer, sprache, quiz, frage, antwort1, antwort2 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='D' order by quiz,nummer,sprache");
  // $result = mysql_query("SELECT frage, nummer, sprache, quiz, frage, antwort1, antwort2 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='E' order by quiz,nummer,sprache");
  // $result = mysql_query("SELECT frage, nummer, sprache, quiz, frage, antwort1, antwort2 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='D' order by quiz,nummer,sprache");
  // $result = mysql_query("SELECT antwort3, nummer, sprache, quiz, antwort3, antwort1, antwort1 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='D' order by quiz,nummer,sprache");  
  // $result = mysql_query("SELECT antwort4, nummer, sprache, quiz, antwort1, antwort1, antwort1 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='D' order by quiz,nummer,sprache");
  // $result = mysql_query("SELECT antwort3, nummer, sprache, quiz, antwort1, antwort1, antwort1 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='D' order by quiz,nummer,sprache");
  // $result = mysql_query("SELECT frage, nummer, sprache, quiz, antwort3, antwort2, antwort3 FROM $tableName where quiz like 'HIMA_FSCS_F' and nummer=1 and sprache='D' order by quiz,nummer,sprache");
  
  
  //  ursprünglich, ist richtig, nur zum debuggen ändern. 
  //öö $result = mysql_query("SELECT nummer, sprache, quiz, frage, antwort1, antwort2, antwort3, antwort4, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");
  
  // $result = mysql_query("SELECT nummer, sprache, quiz, quiz, quiz, quiz, quiz, quiz, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  
  // $result = mysql_query("SELECT nummer, sprache, quiz, frage, quiz, quiz, quiz, quiz, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  

//-
//-
//-  
//-	 $result = mysql_query("SELECT nummer, sprache, quiz, frage, antwort1, antwort2, antwort3, antwort4, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  
//-
//-
//-
//-



  // $result = str_replace("<br>","",$result);
  // $result = str_replace("<br/>","",$result);
  
  
  
 
  //$array = mysql_fetch_row($result);                          //fetch result    
  // 130131 jetzt in einer Schleife: 
  
  $satz = 0;
  $reco = array();			// so deklariert man eine Variable als array, 
							// zufällige Namensgleichheit mit der Variable 'array' in der nächsten Zeile.



 //	 vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
 //  ++++ neu 140615
 //  ++++ neu 140615
		

 // $reco ist mein eigentliches JSON Array 
 // $satz ist mein Zähler . $satz fängt bei 0 an. 
							
 // so wurde in der mySQL-Variante das JSON-array gefüllt: 
 //  $reco[$satz] = $array[0] . '~' . $array[1] . '~' . $array[2]. '~' . $array[3] . '~' . $array[4] . '~' . $array[5] . '~' . $array[6] . '~' . $array[7] . '~' . $array[8] . '~' ; 	
 //
 //      wobei:  	$array[0]   bedeutet:  nummer
 // 				$array[1]   bedeutet:  sprache
 // 				$array[2]   bedeutet:  quiz
 // 				$array[3]   bedeutet:  frage
 // 				$array[4]   bedeutet:  antwort1
 // 				$array[5]   bedeutet:  antwort2
 // 				$array[6]   bedeutet:  antwort3
 // 				$array[7]   bedeutet:  antwort4
 // 				$array[8]   bedeutet:  richtig

 
 //  Achtung: Vorsortierung nach Quiz-'Nummer', 'Sprache'       >> >> >>   imho fehlt da die die Spalte Quiz  'HIMA_FSCS_F' oder 'HIMA_FSCS_P'
 //				für  ".... where quiz like 'HIMA_FSCS_%' ":
 //					--> 
 //						1 D 1 E    2 D 2 E    .......  5 D 5 E 
 // 						es gibt  quiz = HIMA_FSCS_F  und HIMA_FSCS_P
 //
 //				für  ".... where quiz like 'IPCDrives' "     erfolgte in der
 // 				mySQL-Variantre noch keine Programmierung / Berücksichtigung
 // 
 

for ($ii = 0; $ii <= 18; $ii++) {
    $reco[ii]=' ';  
	}
 
 
$reco[0] = '1' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~'; 

//$reco[0] = $reco[0] . 'Muss das CE-Zeichen grundsätzlich auf allen Betriebsmitteln angebracht werden, die in der Maschinenrichtlinie 98-37-EG beschrieben sind?' . '~' ;
//$reco[0] = $reco[0] . 'Ja' . '~' ;
//$reco[0] = $reco[0] . 'Nein, es gibt auch frei handelsfähige Betriebsmittel ohne CE-Zeichen, die in der Maschinenrichtlinie beschrieben sind.' . '~' ;
//$reco[0] = $reco[0] . 'Das CE-Zeichen wird nur an besonders gefährlichen Maschinen angebracht.' . '~' ;
//$reco[0] = $reco[0] . 'Die Anbringung des CE-Zeichens ist freiwillig.' . '~' ;


//     reco(0) wie reco (1) definiert 
$reco[0] = '1' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[0] = $reco[0] . 'Muss das CE-Zeichen grundsaetzlich auf allen Betriebsmitteln angebracht werden, die in der Maschinenrichtlinie 98-37-EG beschrieben sind?' . '~' ;
$reco[0] = $reco[0] . 'Ja' . '~' ;
$reco[0] = $reco[0] . 'Nein, es gibt auch frei handelsfaehige Betriebsmittel ohne CE-Zeichen, die in der Maschinenrichtlinie beschrieben sind.' . '~' ;
$reco[0] = $reco[0] . 'Das CE-Zeichen wird nur an besonders gefaehrlichen Maschinen angebracht.' . '~' ;
$reco[0] = $reco[0] . 'Die Anbringung des CE-Zeichens ist freiwillig.' . '~';
 
 
$reco[1] = '1' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[1] = $reco[1] . 'Must the CE mark be applied to all items of equipment as described in the Machinery Directive 98/37/EU?' . '~' ;
$reco[1] = $reco[1] . 'Yes' . '~' ;
$reco[1] = $reco[1] . 'No, there is also freely marketable equipment described in the Machinery Directive which does not need a CE mark.' . '~' ;
$reco[1] = $reco[1] . 'The CE mark is attached only to particularly dangerous machines.' . '~' ;
$reco[1] = $reco[1] . 'The CE mark is attached on a voluntary basis.' . '~';
 
$reco[2] = '2' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[2] = $reco[2] . 'Das CE-Zeichen auf einem Betriebsmittel dokumentiert grundsaetzlich die Uebereinstimmung ...' . '~' ;
$reco[2] = $reco[2] . 'ausschliesslich mit der Maschinenrichtlinie.' . '~' ;
$reco[2] = $reco[2] . 'bei elektrischen Betriebsmitteln ausschliesslich mit der Niederspannungsrichtlinie.' . '~' ;
$reco[2] = $reco[2] . 'mit allen zutreffenden relevanten Richtlinien, die auf das Betriebsmittel anzuwenden sind.' . '~' ;
$reco[2] = $reco[2] . 'mit einer freiwilligen Ueberpruefung durch ein unabhaengiges Pruefinstitut.' . '~' ;
 
$reco[3] = '2' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[3] = $reco[3] . 'Equipment with a CE mark documents compliance ...' . '~' ;
$reco[3] = $reco[3] . 'exclusively with the Machinery Directive.' . '~' ;
$reco[3] = $reco[3] . 'in case of electric equipment exclusively with the Low Voltage Directive.' . '~' ;
$reco[3] = $reco[3] . 'with all relevant directives applicable to the equipment' . '~' ;
$reco[3] = $reco[3] . 'with a voluntary verification by an independent test institute.' . '~' ;
 
$reco[4] = '3' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[4] = $reco[4] . 'Verantwortlich fuer eine Maschine oder ein Betriebsmittel ist ...' . '~' ;
$reco[4] = $reco[4] . 'der Hersteller.' . '~' ;
$reco[4] = $reco[4] . 'der Ueberbringer bzw. Lieferant.' . '~' ;
$reco[4] = $reco[4] . 'der Inverkehrbringer.' . '~' ;
$reco[4] = $reco[4] . 'der Planer der Maschine bzw. des Betriebsmittels.' . '~' ;
 
$reco[5] = '3' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[5] = $reco[5] . 'Person or company responsible for equipment:' . '~' ;
$reco[5] = $reco[5] . 'manufacturer' . '~' ;
$reco[5] = $reco[5] . 'haulage company / supplier' . '~' ;
$reco[5] = $reco[5] . 'distributor' . '~' ;
$reco[5] = $reco[5] . 'person who planned the machine or equipment' . '~' ;
 
$reco[6] = '4' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[6] = $reco[6] . 'Zu Richtlinien fuer den europaeischen Binnenmarkt gibt es harmonisierte Normen. Die Anwendung dieser Normen ist ...' . '~' ;
$reco[6] = $reco[6] . 'grundsaetzlich freiwillig.' . '~' ;
$reco[6] = $reco[6] . 'grundsaetzlich vorgeschrieben.' . '~' ;
$reco[6] = $reco[6] . 'bei gefaehrlichen Maschinen grundsaetzlich vorgeschrieben.' . '~' ;
$reco[6] = $reco[6] . 'zumindest mit den grundlegenden A-Normen durchzufuehren.' . '~' ;
 
$reco[7] = '4' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[7] = $reco[7] . 'There are harmonized standards applying to the European Directives. The application of such a standard is ...' . '~' ;
$reco[7] = $reco[7] . 'voluntary' . '~' ;
$reco[7] = $reco[7] . 'mandatory' . '~' ;
$reco[7] = $reco[7] . 'mandatory for dangerous machines' . '~' ;
$reco[7] = $reco[7] . 'carried out at least together with the fundamental A-standards.' . '~';

$reco[8] = '5' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco[8] = $reco[8] . 'Fuer die in der Maschinenrichtlinie in Anhang IV genannten Maschinentypen muss grundsaetzlich ...' . '~' ;
$reco[8] = $reco[8] . 'eine Baumusterpruefung durchgefuehrt werden.' . '~' ;
$reco[8] = $reco[8] . 'die Einbindung einer europaeischen benannten Stelle erfolgen.' . '~' ;
$reco[8] = $reco[8] . 'eine dokumentierte Eigenbewertung des Inverkehrbringers durchgefuehrt werden.' . '~' ;
$reco[8] = $reco[8] . 'das GS-Zeichen vorhanden sein.' . '~' ;

$reco[9] = '5' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ; 
$reco[9] = $reco[9] . 'For the types of machines specified in the Machinery Directive in appendix IV it is necessary ...' . '~' ;
$reco[9] = $reco[9] . 'to carry out a prototype type test.' . '~' ;
$reco[9] = $reco[9] . 'to involve a European listed notified body.' . '~' ;
$reco[9] = $reco[9] . 'for the distributor to carry out a documented self assessment.' . '~' ;
$reco[9] = $reco[9] . 'that the GS mark is attached.' . '~' ;


// Process Quiz starts here 

$reco[10] = '1' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco[10] = $reco[10] . 'Durch welche beiden Hauptkomponenten wird ein Risiko charakterisiert?' . '~' ;
$reco[10] = $reco[10] . 'H&auml;ufigkeit des Auftretens und Ausma&szlig; der Folgen' . '~' ;
$reco[10] = $reco[10] . 'Ausma&szlig; der Folgen und Dauer des Schadens' . '~' ;
$reco[10] = $reco[10] . 'H&auml;ufigkeit des Auftretens und sichere Entfernung zum Schaden' . '~' ;
$reco[10] = $reco[10] . 'Ausma&szlig; der Folgen und sichere Entfernung zum Schaden' . '~' ;

$reco[11] = '1' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ; 
$reco[11] = $reco[11] . 'What are the two main components of risk?' . '~' ;
$reco[11] = $reco[11] . 'Frequency of occurrence &amp; magnitude of consequences' . '~' ;
$reco[11] = $reco[11] . 'Magnitude of consequences &amp; duration of harm' . '~' ;
$reco[11] = $reco[11] . 'Frequency of occurrence &amp; safe distance from harm' . '~' ;
$reco[11] = $reco[11] . 'Magnitude of consequences &amp; safe distance from harm' . '~' ;

$reco[12] = '2' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco[12] = $reco[12] . 'Auf welche Weise erfolgt i.d.R. die Verringerung von Risiken durch ein mit Sicherheitsinstrumenten ausgestattetes System?' . '~' ;
$reco[12] = $reco[12] . 'Es entspricht den Anforderungen des Managements' . '~' ;
$reco[12] = $reco[12] . 'Es begrenzt das Ausma&szlig; von Sch&auml;den' . '~' ;
$reco[12] = $reco[12] . 'Es entspricht gesetzlichen Vorschriften' . '~' ;
$reco[12] = $reco[12] . 'Es verringert die Wahrscheinlichkeit des Auftretens von SchÇÏden' . '~' ;

$reco[13] = '2' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ; 
$reco[13] = $reco[13] . 'How does a Safety Instrumented System most typically reduce risk?' . '~' ;
$reco[13] = $reco[13] . 'It satisfies managerial requirements' . '~' ;
$reco[13] = $reco[13] . 'It reduces the magnitude of harm' . '~' ;
$reco[13] = $reco[13] . 'It satisfies legal requirements' . '~' ;
$reco[13] = $reco[13] . 'It reduces the likelihood of harm' . '~' ;

$reco[14] = '3' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco[14] = $reco[14] . 'Markov-Modelle sind ein analytisches Verfahren, das eingesetzt wird zur ...' . '~' ;
$reco[14] = $reco[14] . 'Berechnung der Wahrscheinlichkeit eines bestimmten Verhaltens von Systemen' . '~' ;
$reco[14] = $reco[14] . 'Einsch&auml;tzung des SIL-Niveaus einer Gefahr' . '~' ;
$reco[14] = $reco[14] . 'Berechnung der Verf&uuml;gbarkeit' . '~' ;
$reco[14] = $reco[14] . 'Berechnung der anteiligen Sicherheit bei einem Funktionsfehler eines Instruments' . '~' ;

$reco[15] = '3' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ; 
$reco[15] = $reco[15] . 'Markov models are an analysis technique used to ...' . '~' ;
$reco[15] = $reco[15] . 'calculate probability of systems behavior' . '~' ;
$reco[15] = $reco[15] . 'estimate SIL level of a hazard' . '~' ;
$reco[15] = $reco[15] . 'calculate availability' . '~' ;
$reco[15] = $reco[15] . 'calculate safe failure fraction of an instrument' . '~' ;

$reco[16] = '4' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco[16] = $reco[16] . 'Welches der folgenden Beispiele d&uuml;rfte im Rahmen von funktionalen Sicherheits&uuml;berlegungen am wenigsten Ber&uuml;cksichtigung finden?' . '~' ;
$reco[16] = $reco[16] . 'Ein Arbeiter, der sich in Folge des Ausrutschens auf nassem Boden verletzt' . '~' ;
$reco[16] = $reco[16] . 'Ein Arbeiter, der sich beim Betreiben einer Blechstanzpresse verletzt' . '~' ;
$reco[16] = $reco[16] . 'Ein Arbeiter, der bei einer Explosion in einem chemischen Reaktor get&ouml;tet wird' . '~' ;
$reco[16] = $reco[16] . 'Ein Anwohner, der durch die Freisetzung von Schadstoffen einer verfahrenstechnischen Anlage erkrankt' . '~' ;

$reco[16] = '4' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ; 
$reco[16] = $reco[16] . 'Which of the following items is the least likely to be a consideration for functional safety?' . '~' ;
$reco[16] = $reco[16] . 'A worker becoming injured slipping on a wet floor' . '~' ;
$reco[16] = $reco[16] . 'A worker getting hurt operating a sheet metal stamp press' . '~' ;
$reco[16] = $reco[16] . 'A worker getting killed in a chemical reactor explosion' . '~' ;
$reco[16] = $reco[16] . 'A local resident becoming ill from a process plant environmental release' . '~' ;

$reco[17] = '5' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco[17] = $reco[17] . 'Welchem Zweck dient die Dokumentation?' . '~' ;
$reco[17] = $reco[17] . 'Der effektiven Ausf&uuml;hrung der Phasen des Sicherheitslebenszyklus' . '~' ;
$reco[17] = $reco[17] . 'Der Erf&uuml;llung der Normen' . '~' ;
$reco[17] = $reco[17] . 'Die erste und die vierte Antwort sind richtig' . '~' ;
$reco[17] = $reco[17] . 'Der Unterst&uuml;tzung der Aufgaben im Rahmen der Bewertung der funktionalen Sicherheit' . '~' ;

$reco[17] = '5' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ; 
$reco[17] = $reco[17] . 'What is the purpose of documentation?' . '~' ;
$reco[17] = $reco[17] . 'To effectively perform the phases of the safety lifecycle' . '~' ;
$reco[17] = $reco[17] . 'To satisfy the standards' . '~' ;
$reco[17] = $reco[17] . 'Both, the 1st and the 4th answer are true' . '~' ;
$reco[17] = $reco[17] . 'To support the functional safety assessment tasks' . '~' ;

 
for ($ii = 0; $ii <= 18; $ii++) {
    $reco[ii]=str_replace('<br>',' ',$reco[ii]);  
	$reco[ii]=str_replace('<br/>',' ',$reco[ii]);
  
    $reco[ii]=str_replace('-',' ',$reco[ii]);
    $reco[ii]=str_replace('ä','ae',$reco[ii]);
    $reco[ii]=str_replace('ö','oe',$reco[ii]);
    $reco[ii]=str_replace('ü','ue',$reco[ii]);
	
	$reco[ii]=str_replace('Ä','Ae',$reco[ii]);
	$reco[ii]=str_replace('Ö','Oe',$reco[ii]);
	$reco[ii]=str_replace('Ü','Ue',$reco[ii]);
	
    $reco[ii]=str_replace('ß','ss',$reco[ii]);
}
 
 

 //  ++++ neu 140615
 //  ++++ neu 140615					
 //	 ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

							
//-  while($array = mysql_fetch_row($result))
//-	{	
//-	// HTML-Tags raus 
//-    $array=str_replace('<br>',' ',$array);  
    //-$array=str_replace('<br/>',' ',$array);
  
    //-$array=str_replace('-',' ',$array);
    //-$array=str_replace('ä','ae',$array);
    //-$array=str_replace('ö','oe',$array);
    //-$array=str_replace('ü','ue',$array);
//-	
	//-$array=str_replace('Ä','Ae',$array);
	//-$array=str_replace('Ö','Oe',$array);
	//-$array=str_replace('Ü','Ue',$array);
	//-
    //-$array=str_replace('ß','ss',$array);
	
	//-// $array=str_replace('-',' ',$array);
    //-// $array=str_replace('ä','a',$array);
    //-// $array=str_replace('ö','o',$array);
    //-// $array=str_replace('ü','u',$array);
    //-// $array=str_replace('ß','s',$array);
	
	

	
	//-  // öööööööööö       replaces the Kommentarzeile below: 
	//-  $reco[$satz] = $array[0] . '~' . $array[1] . '~' . $array[2]. '~' . $array[3] . '~' . $array[4] . '~' . $array[5] . '~' . $array[6] . '~' . $array[7] . '~' . $array[8] . '~' ; 	
	
	//-  //ää $reco[$satz] = substr($array[0],1,8) . '~' . substr($array[1],1,8) . '~' . substr($array[2],1,8) . '~' . substr($array[3],1,8) . '~' . substr($array[4],1,8) . '~' . substr($array[5],1,8)  . '~' . substr($array[6],1,8) . '~' . $array[7] . '~' . $array[8] . '~' ; 	
	
	
	

	
	//-  // echo $reco[$satz] . '<br/>';
	//-  // echo $array[0];
	//-  // echo $array[1];
	//-  // echo $array[2];
	//-  // echo $array[3];
	//-  // echo $array[4];
	
	
		
	
	//-  $satz = $satz + 1;
	
	//-  }
  
   
  
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  
  // so hiess es im Original, als noch ein Satz retrievt wurde und die einzelnen Felder dann per JSON übergeben wurde.
  //echo json_encode($array);
  echo json_encode($reco);

?>