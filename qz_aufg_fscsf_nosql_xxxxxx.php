<?php 

  
  $satz = 0;
  $reco_fscsf = array();			// so deklariert man eine Variable als array, 
							// zufällige Namensgleichheit mit der Variable 'array' in der nächsten Zeile.

 

for ($ii = 0; $ii <= 9; $ii++) {
    $reco_fscsf[ii]=' ';  
	}


//     reco(0) wie reco (1) definiert 
$reco_fscsf[0] = '1' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[0] = $reco_fscsf[0] . 'Muss das CE-Zeichen grundsaetzlich auf allen Betriebsmitteln angebracht werden, die in der Maschinenrichtlinie 98-37-EG beschrieben sind?' . '~' ;
$reco_fscsf[0] = $reco_fscsf[0] . 'Ja' . '~' ;
$reco_fscsf[0] = $reco_fscsf[0] . 'Nein, es gibt auch frei handelsfaehige Betriebsmittel ohne CE-Zeichen, die in der Maschinenrichtlinie beschrieben sind.' . '~' ;
$reco_fscsf[0] = $reco_fscsf[0] . 'Das CE-Zeichen wird nur an besonders gefaehrlichen Maschinen angebracht.' . '~' ;
$reco_fscsf[0] = $reco_fscsf[0] . 'Die Anbringung des CE-Zeichens ist freiwillig.' . '~';
 
 
$reco_fscsf[1] = '1' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[1] = $reco_fscsf[1] . 'Must the CE mark be applied to all items of equipment as described in the Machinery Directive 98/37/EU?' . '~' ;
$reco_fscsf[1] = $reco_fscsf[1] . 'Yes' . '~' ;
$reco_fscsf[1] = $reco_fscsf[1] . 'No, there is also freely marketable equipment described in the Machinery Directive which does not need a CE mark.' . '~' ;
$reco_fscsf[1] = $reco_fscsf[1] . 'The CE mark is attached only to particularly dangerous machines.' . '~' ;
$reco_fscsf[1] = $reco_fscsf[1] . 'The CE mark is attached on a voluntary basis.' . '~';
 
$reco_fscsf[2] = '2' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[2] = $reco_fscsf[2] . 'Das CE-Zeichen auf einem Betriebsmittel dokumentiert grundsaetzlich die Uebereinstimmung ...' . '~' ;
$reco_fscsf[2] = $reco_fscsf[2] . 'ausschliesslich mit der Maschinenrichtlinie.' . '~' ;
$reco_fscsf[2] = $reco_fscsf[2] . 'bei elektrischen Betriebsmitteln ausschliesslich mit der Niederspannungsrichtlinie.' . '~' ;
$reco_fscsf[2] = $reco_fscsf[2] . 'mit allen zutreffenden relevanten Richtlinien, die auf das Betriebsmittel anzuwenden sind.' . '~' ;
$reco_fscsf[2] = $reco_fscsf[2] . 'mit einer freiwilligen Ueberpruefung durch ein unabhaengiges Pruefinstitut.' . '~' ;
 
$reco_fscsf[3] = '2' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[3] = $reco_fscsf[3] . 'Equipment with a CE mark documents compliance ...' . '~' ;
$reco_fscsf[3] = $reco_fscsf[3] . 'exclusively with the Machinery Directive.' . '~' ;
$reco_fscsf[3] = $reco_fscsf[3] . 'in case of electric equipment exclusively with the Low Voltage Directive.' . '~' ;
$reco_fscsf[3] = $reco_fscsf[3] . 'with all relevant directives applicable to the equipment' . '~' ;
$reco_fscsf[3] = $reco_fscsf[3] . 'with a voluntary verification by an independent test institute.' . '~' ;
 
$reco_fscsf[4] = '3' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[4] = $reco_fscsf[4] . 'Verantwortlich fuer eine Maschine oder ein Betriebsmittel ist der ...' . '~' ;
$reco_fscsf[4] = $reco_fscsf[4] . 'Hersteller.' . '~' ;
$reco_fscsf[4] = $reco_fscsf[4] . 'Ueberbringer bzw. Lieferant.' . '~' ;
$reco_fscsf[4] = $reco_fscsf[4] . 'Inverkehrbringer.' . '~' ;
$reco_fscsf[4] = $reco_fscsf[4] . 'Planer der Maschine bzw. des Betriebsmittels.' . '~' ;
 
$reco_fscsf[5] = '3' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[5] = $reco_fscsf[5] . 'The person or company responsible for equipment is the ...' . '~' ;
$reco_fscsf[5] = $reco_fscsf[5] . 'manufacturer' . '~' ;
$reco_fscsf[5] = $reco_fscsf[5] . 'haulage company / supplier' . '~' ;
$reco_fscsf[5] = $reco_fscsf[5] . 'distributor' . '~' ;
$reco_fscsf[5] = $reco_fscsf[5] . 'person who planned the machine or equipment' . '~' ;
 
$reco_fscsf[6] = '4' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[6] = $reco_fscsf[6] . 'Zu Richtlinien fuer den europaeischen Binnenmarkt gibt es harmonisierte Normen. Die Anwendung dieser Normen ist ...' . '~' ;
$reco_fscsf[6] = $reco_fscsf[6] . 'grundsaetzlich freiwillig.' . '~' ;
$reco_fscsf[6] = $reco_fscsf[6] . 'grundsaetzlich vorgeschrieben.' . '~' ;
$reco_fscsf[6] = $reco_fscsf[6] . 'bei gefaehrlichen Maschinen grundsaetzlich vorgeschrieben.' . '~' ;
$reco_fscsf[6] = $reco_fscsf[6] . 'zumindest mit den grundlegenden A-Normen durchzufuehren.' . '~' ;
 
$reco_fscsf[7] = '4' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[7] = $reco_fscsf[7] . 'There are harmonized standards applying to the European Directives. The application of such a standard is ...' . '~' ;
$reco_fscsf[7] = $reco_fscsf[7] . 'voluntary' . '~' ;
$reco_fscsf[7] = $reco_fscsf[7] . 'mandatory' . '~' ;
$reco_fscsf[7] = $reco_fscsf[7] . 'mandatory for dangerous machines' . '~' ;
$reco_fscsf[7] = $reco_fscsf[7] . 'carried out at least together with the fundamental A-standards.' . '~';

$reco_fscsf[8] = '5' . '~' . 'D' . '~' . 'HIMA_FSCS_F' . '~' ;
$reco_fscsf[8] = $reco_fscsf[8] . 'Fuer die in der Maschinenrichtlinie in Anhang IV genannten Maschinentypen muss grundsaetzlich ...' . '~' ;
$reco_fscsf[8] = $reco_fscsf[8] . 'eine Baumusterpruefung durchgefuehrt werden.' . '~' ;
$reco_fscsf[8] = $reco_fscsf[8] . 'die Einbindung einer europaeischen benannten Stelle erfolgen.' . '~' ;
$reco_fscsf[8] = $reco_fscsf[8] . 'eine dokumentierte Eigenbewertung des Inverkehrbringers durchgefuehrt werden.' . '~' ;
$reco_fscsf[8] = $reco_fscsf[8] . 'das GS-Zeichen vorhanden sein.' . '~' ;

$reco_fscsf[9] = '5' . '~' . 'E' . '~' . 'HIMA_FSCS_F' . '~' ; 
$reco_fscsf[9] = $reco_fscsf[9] . 'For the types of machines specified in the Machinery Directive in appendix IV it is necessary ...' . '~' ;
$reco_fscsf[9] = $reco_fscsf[9] . 'to carry out a prototype type test.' . '~' ;
$reco_fscsf[9] = $reco_fscsf[9] . 'to involve a European listed notified body.' . '~' ;
$reco_fscsf[9] = $reco_fscsf[9] . 'for the distributor to carry out a documented self assessment.' . '~' ;
$reco_fscsf[9] = $reco_fscsf[9] . 'that the GS mark is attached.' . '~' ;
 
for ($ii = 0; $ii <= 9; $ii++) {
    $reco_fscsf[ii]=str_replace('<br>',' ',$reco_fscsf[ii]);  
	$reco_fscsf[ii]=str_replace('<br/>',' ',$reco_fscsf[ii]);
  
    $reco_fscsf[ii]=str_replace('-',' ',$reco_fscsf[ii]);
    $reco_fscsf[ii]=str_replace('ä','ae',$reco_fscsf[ii]);
    $reco_fscsf[ii]=str_replace('ö','oe',$reco_fscsf[ii]);
    $reco_fscsf[ii]=str_replace('ü','ue',$reco_fscsf[ii]);
	
	$reco_fscsf[ii]=str_replace('Ä','Ae',$reco_fscsf[ii]);
	$reco_fscsf[ii]=str_replace('Ö','Oe',$reco_fscsf[ii]);
	$reco_fscsf[ii]=str_replace('Ü','Ue',$reco_fscsf[ii]);
	
    $reco_fscsf[ii]=str_replace('ß','ss',$reco_fscsf[ii]);
}
 
 
  
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  
  // so hiess es im Original, als noch ein Satz retrievt wurde und die einzelnen Felder dann per JSON übergeben wurde.
  //echo json_encode($array);
  echo json_encode($reco_fscsf);

?>