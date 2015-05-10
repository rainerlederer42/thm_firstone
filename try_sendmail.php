<?php
include_once "test_pear_mail_send_001.php";

$crea_vn = "Leihischof";
$crea_nn = "Klemm";
$dat_tmp = date("Y-m-d H:i:s");
						
					

// Dieses Echo ist ein gutes Diagnostc,   wenn man diese URI  zum Testen  testweise   direkt aufruft: 
//  drinlassen ! 	
//  Das liefert einen Hínweis, das das .php aufgerufen wurde und zeigt das aktuelle Datum/Uhrzeit. 				
					
echo "dat_tmp = " . $dat_tmp . "<br />";
				

				
// merke: substr zaehlt ab 0 bei Von-Pos 
$crea_datti_ger = substr($dat_tmp,8,2) . "." . substr($dat_tmp,5,2) . "." . substr($dat_tmp,0,4) . "  " . substr($dat_tmp,11,5);
$wkbez1 = "Kalmit Radtour";
$wkbez2 = "Fahrradrennen";
$start_datti_ger = $crea_datti_ger;
$ende_datti_ger = $crea_datti_ger;
$this_recip_vn = "Linus";
$this_recip_nn = "vanPelt";
$this_recip_e = "keineAhning@egal.com";
$this_recip_link = "";


// thats nonsense meanwhile     echo "<h2>xxxxxxx vorher </h2>";
// thats nonsense meanwhile		echo "<p>Ihre yxyxyxyxyxyxyxxyxyxy  Registrierung wurde erfolgreich abgeschlossen. Sie können sich ab sofort mit Ihren Zugangsdaten <a href='sbs_login.php' class='btn btn-small btn-info'>anmelden</a></p>";
// thats nonsense meanwhile		echo "<p class='text-info'>An die angegebene E-Mail Adresse wurde automatisch eine Best&auml;tigung der erfolgten XXXXXXXXXXXXXX verschickt.</p>";		

invite_by_mail_to_new_wk1 ($crea_vn, $crea_nn, $crea_datti_ger, $wkbez1, $wkbez2, $start_datti_ger, $ende_datti_ger, $this_recip_vn, $this_recip_nn, $this_recip_e, $this_recip_link);


// thats nonsense meanwhile   echo "<h2>xxxxxxx abgeschlossen</h2>";
// thats nonsense meanwhile   echo "<p>Ihre yxyxyxyxyxyxyxxyxyxy  Registrierung wurde erfolgreich abgeschlossen. Sie können sich ab sofort mit Ihren Zugangsdaten <a href='sbs_login.php' class='btn btn-small btn-info'>anmelden</a></p>";
// thats nonsense meanwhile   echo "<p class='text-info'>An die angegebene E-Mail Adresse wurde automatisch eine Best&auml;tigung der erfolgten XXXXXXXXXXXXXX verschickt.</p>";		


?>