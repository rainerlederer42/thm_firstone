<?php 

  
  $satz = 0;
  $reco_fscsp = array();			// so deklariert man eine Variable als array, 
							// zufällige Namensgleichheit mit der Variable 'array' in der nächsten Zeile.



 
 

for ($ii = 0; $ii <= 9; $ii++) {
    $reco_fscsp[ii]=' ';  
	}

	
//     reco(0) wie reco (1) definiert 
$reco_fscsp[0] = '1' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~'; 
$reco_fscsp[0] = $reco_fscsp[0] . 'Durch welche beiden Hauptkomponenten wird ein Risiko charakterisiert?' . '~' ;
$reco_fscsp[0] = $reco_fscsp[0] . 'Haeufigkeit des Auftretens und Ausmass der Folgen' . '~' ;
$reco_fscsp[0] = $reco_fscsp[0] . 'Ausmass der Folgen und Dauer des Schadens' . '~' ;
$reco_fscsp[0] = $reco_fscsp[0] . 'Haeufigkeit des Auftretens und sichere Entfernung zum Schaden' . '~' ;
$reco_fscsp[0] = $reco_fscsp[0] . 'Ausmass der Folgen und sichere Entfernung zum Schaden' . '~';
 
 
$reco_fscsp[1] = '1' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[1] = $reco_fscsp[1] . 'What are the two main components of risk?' . '~' ;
$reco_fscsp[1] = $reco_fscsp[1] . 'Frequency of occurrence and magnitude of consequences' . '~' ;
$reco_fscsp[1] = $reco_fscsp[1] . 'Magnitude of consequences and duration of harm' . '~' ;
$reco_fscsp[1] = $reco_fscsp[1] . 'Frequency of occurrence and safe distance from harm' . '~' ;
$reco_fscsp[1] = $reco_fscsp[1] . 'Magnitude of consequences and safe distance from harm' . '~';
 
$reco_fscsp[2] = '2' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[2] = $reco_fscsp[2] . 'Auf welche Weise erfolgt in der Regel die Verringerung von Risiken durch ein mit Sicherheitsinstrumenten ausgestattetes System ?' . '~' ;
$reco_fscsp[2] = $reco_fscsp[2] . 'Es entspricht den Anforderungen des Managements' . '~' ;
$reco_fscsp[2] = $reco_fscsp[2] . 'Es begrenzt das Ausmass von Schaeden' . '~' ;
$reco_fscsp[2] = $reco_fscsp[2] . 'Es entspricht gesetzlichen Vorschriften' . '~' ;
$reco_fscsp[2] = $reco_fscsp[2] . 'Es verringert die Wahrscheinlichkeit des Auftretens von Schaeden' . '~' ;
 
$reco_fscsp[3] = '2' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[3] = $reco_fscsp[3] . 'How does a Safety Instrumented System most typically reduce risk ?' . '~' ;
$reco_fscsp[3] = $reco_fscsp[3] . 'it satisfies managerial requirements' . '~' ;
$reco_fscsp[3] = $reco_fscsp[3] . 'it reduces the magnitude of harm' . '~' ;
$reco_fscsp[3] = $reco_fscsp[3] . 'it satisfies legal requirements' . '~' ;
$reco_fscsp[3] = $reco_fscsp[3] . 'it reduces the likelihood of harm' . '~' ;
 
$reco_fscsp[4] = '3' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[4] = $reco_fscsp[4] . 'Markov-Modelle sind ein analytisches Verfahren, das eingesetzt wird zur ...' . '~' ;
$reco_fscsp[4] = $reco_fscsp[4] . 'Berechnung der Wahrscheinlichkeit eines bestimmten Verhaltens von Systemen' . '~' ;
$reco_fscsp[4] = $reco_fscsp[4] . 'Einschaetzung des SIL-Niveaus einer Gefahr' . '~' ;
$reco_fscsp[4] = $reco_fscsp[4] . 'Berechnung der Verfuegbarkeit' . '~' ;
$reco_fscsp[4] = $reco_fscsp[4] . 'Berechnung der anteiligen Sicherheit bei einem Funktionsfehler eines Instruments' . '~' ;
 
$reco_fscsp[5] = '3' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[5] = $reco_fscsp[5] . 'Markov models are an analysis technique used to ...' . '~' ;
$reco_fscsp[5] = $reco_fscsp[5] . 'Calculate probability of systems behavior' . '~' ;
$reco_fscsp[5] = $reco_fscsp[5] . 'Estimate SIL level of a hazard' . '~' ;
$reco_fscsp[5] = $reco_fscsp[5] . 'Calculate availability' . '~' ;
$reco_fscsp[5] = $reco_fscsp[5] . 'Calculate Safe Failure Fraction of an instrument' . '~' ;
 
$reco_fscsp[6] = '4' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[6] = $reco_fscsp[6] . 'Welches der folgenden Beispiele duerfte im Rahmen von funktionalen Sicherheitsueberlegungen am wenigsten Beruecksichtigung finden ?' . '~' ;
$reco_fscsp[6] = $reco_fscsp[6] . 'ein Arbeiter, der sich in Folge des Ausrutschens auf nassem Boden verletzt' . '~' ;
$reco_fscsp[6] = $reco_fscsp[6] . 'ein Arbeiter, der sich beim Betreiben einer Blechstanzpresse verletzt' . '~' ;
$reco_fscsp[6] = $reco_fscsp[6] . 'ein Arbeiter, der bei einer Explosion in einem chemischen Reaktor getoetet wird' . '~' ;
$reco_fscsp[6] = $reco_fscsp[6] . 'ein Anwohner, der durch die Freisetzung von Schadstoffen einer verfahrenstechnischen Anlage erkrankt' . '~' ;
 
$reco_fscsp[7] = '4' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[7] = $reco_fscsp[7] . 'Which of the following items is the least likely to be a consideration for functional safety ?' . '~' ;
$reco_fscsp[7] = $reco_fscsp[7] . 'A worker becoming injured slipping on a wet floor' . '~' ;
$reco_fscsp[7] = $reco_fscsp[7] . 'A worker getting hurt operating a sheet metal stamp press' . '~' ;
$reco_fscsp[7] = $reco_fscsp[7] . 'A worker getting killed in a chemical reactor explosion' . '~' ;
$reco_fscsp[7] = $reco_fscsp[7] . 'A local resident becoming ill from a process plant environmental release' . '~';

$reco_fscsp[8] = '5' . '~' . 'D' . '~' . 'HIMA_FSCS_P' . '~' ;
$reco_fscsp[8] = $reco_fscsp[8] . 'Welchem Zweck dient die Dokumentation?' . '~' ;
$reco_fscsp[8] = $reco_fscsp[8] . 'der effektiven Ausfuehrung der Phasen des Sicherheitslebenszyklus' . '~' ;
$reco_fscsp[8] = $reco_fscsp[8] . 'der Erfuellung der Normen' . '~' ;
$reco_fscsp[8] = $reco_fscsp[8] . 'die erste und die vierte Antwort sind richtig' . '~' ;
$reco_fscsp[8] = $reco_fscsp[8] . 'der Unterstuetzung der Aufgaben im Rahmen der Bewertung der funktionalen Sicherheit' . '~' ;

$reco_fscsp[9] = '5' . '~' . 'E' . '~' . 'HIMA_FSCS_P' . '~' ; 
$reco_fscsp[9] = $reco_fscsp[9] . 'What is the purpose of documentation?' . '~' ;
$reco_fscsp[9] = $reco_fscsp[9] . 'To effectively perform the phases of the safety lifecycle' . '~' ;
$reco_fscsp[9] = $reco_fscsp[9] . 'To satisfy the standards' . '~' ;
$reco_fscsp[9] = $reco_fscsp[9] . 'Both the 1st and the 4th answer is true' . '~' ;
$reco_fscsp[9] = $reco_fscsp[9] . 'To support the functional safety assessment tasks' . '~' ;
 

 
 
 

 
for ($ii = 0; $ii <= 9; $ii++) {
    $reco_fscsp[ii]=str_replace('<br>',' ',$reco_fscsp[ii]);  
	$reco_fscsp[ii]=str_replace('<br/>',' ',$reco_fscsp[ii]);
  
    $reco_fscsp[ii]=str_replace('-',' ',$reco_fscsp[ii]);
    $reco_fscsp[ii]=str_replace('ä','ae',$reco_fscsp[ii]);
    $reco_fscsp[ii]=str_replace('ö','oe',$reco_fscsp[ii]);
    $reco_fscsp[ii]=str_replace('ü','ue',$reco_fscsp[ii]);
	
	$reco_fscsp[ii]=str_replace('Ä','Ae',$reco_fscsp[ii]);
	$reco_fscsp[ii]=str_replace('Ö','Oe',$reco_fscsp[ii]);
	$reco_fscsp[ii]=str_replace('Ü','Ue',$reco_fscsp[ii]);
	
    $reco_fscsp[ii]=str_replace('ß','ss',$reco_fscsp[ii]);
}
 
 


   
  
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  
  // so hiess es im Original, als noch ein Satz retrievt wurde und die einzelnen Felder dann per JSON übergeben wurde.
  //echo json_encode($array);
  echo json_encode($reco_fscsp);

?>