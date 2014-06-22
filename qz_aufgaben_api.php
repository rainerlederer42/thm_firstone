<?php 

  //--------------------------------------------------------------------------
  // this will retrieve the questions from the table "aufgabe" 
  //--------------------------------------------------------------------------
  $host = "212.116.4.136";
  $user = "hima_ssweb";
  $pass = "ssweb";

  $databaseName = "himadata";
  $tableName = "aufgabe";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  // die Daten stehen ja schon hier drin, oben !!!       include 'DB.php';
  
  // echo $host;
  // echo $user;
  // echo $pass;
  
  
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

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
	 $result = mysql_query("SELECT nummer, sprache, quiz, frage, antwort1, antwort2, antwort3, antwort4, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  
  
  // $result = str_replace("<br>","",$result);
  // $result = str_replace("<br/>","",$result);
  
  
  
 
  //$array = mysql_fetch_row($result);                          //fetch result    
  // 130131 jetzt in einer Schleife: 
  
  $satz = 0;
  $reco = array();			// so deklariert man eine Variable als array, 
							// zufällige Namensgleichheit mit der Variable 'array' in der nächsten Zeile.
  
  while($array = mysql_fetch_row($result))
	{	
	// HTML-Tags raus 
    $array=str_replace('<br>',' ',$array);  
    $array=str_replace('<br/>',' ',$array);
  
    $array=str_replace('-',' ',$array);
    $array=str_replace('ä','ae',$array);
    $array=str_replace('ö','oe',$array);
    $array=str_replace('ü','ue',$array);
	
	$array=str_replace('Ä','Ae',$array);
	$array=str_replace('Ö','Oe',$array);
	$array=str_replace('Ü','Ue',$array);
	
    $array=str_replace('ß','ss',$array);
	
	// $array=str_replace('-',' ',$array);
    // $array=str_replace('ä','a',$array);
    // $array=str_replace('ö','o',$array);
    // $array=str_replace('ü','u',$array);
    // $array=str_replace('ß','s',$array);
	
	
	/* 
	
	$buff0 = $array[0];
	$buff1 = $array[1];
	$buff2 = $array[2];
	$buff3 = $array[3];
	$buff4 = $array[4];
	$buff5 = $array[5];
	$buff6 = $array[6];
	$buff7 = $array[7];
	$buff8 = $array[8];
	
	$buff0=str_replace('-',' ',$buff0);
	$buff0=str_replace('ä','ae',$buff0);
	$buff0=str_replace('ö','oe',$buff0);
	$buff0=str_replace('ü','ue',$buff0);
	$buff0=str_replace('Ä','Ae',$buff0);
	$buff0=str_replace('Ö','Oe',$buff0);
	$buff0=str_replace('Ü','Ue',$buff0);
	$buff0=str_replace('ß','ss',$buff0);
	
	$buff1=str_replace('-',' ',$buff1);
	$buff1=str_replace('ä','ae',$buff1);
	$buff1=str_replace('ö','oe',$buff1);
	$buff1=str_replace('ü','ue',$buff1);
	$buff1=str_replace('Ä','Ae',$buff1);
	$buff1=str_replace('Ö','Oe',$buff1);
	$buff1=str_replace('Ü','Ue',$buff1);
	$buff1=str_replace('ß','ss',$buff1);
	
	$buff2=str_replace('-',' ',$buff2);
	$buff2=str_replace('ä','ae',$buff2);
	$buff2=str_replace('ö','oe',$buff2);
	$buff2=str_replace('ü','ue',$buff2);
	$buff2=str_replace('Ä','Ae',$buff2);
	$buff2=str_replace('Ö','Oe',$buff2);
	$buff2=str_replace('Ü','Ue',$buff2);
	$buff2=str_replace('ß','ss',$buff2);
	
	$buff3=str_replace('-',' ',$buff3);
	$buff3=str_replace('ä','ae',$buff3);
	$buff3=str_replace('ö','oe',$buff3);
	$buff3=str_replace('ü','ue',$buff3);
	$buff3=str_replace('Ä','Ae',$buff3);
	$buff3=str_replace('Ö','Oe',$buff3);
	$buff3=str_replace('Ü','Ue',$buff3);
	$buff3=str_replace('ß','ss',$buff3);
	
	$buff4=str_replace('-',' ',$buff4);
	$buff4=str_replace('ä','ae',$buff4);
	$buff4=str_replace('ö','oe',$buff4);
	$buff4=str_replace('ü','ue',$buff4);
	$buff4=str_replace('Ä','Ae',$buff4);
	$buff4=str_replace('Ö','Oe',$buff4);
	$buff4=str_replace('Ü','Ue',$buff4);
	$buff4=str_replace('ß','ss',$buff4);

	$buff5=str_replace('-',' ',$buff5);
	$buff5=str_replace('ä','ae',$buff5);
	$buff5=str_replace('ö','oe',$buff5);
	$buff5=str_replace('ü','ue',$buff5);
	$buff5=str_replace('Ä','Ae',$buff5);
	$buff5=str_replace('Ö','Oe',$buff5);
	$buff5=str_replace('Ü','Ue',$buff5);
	$buff5=str_replace('ß','ss',$buff5);	
	
	$buff6=str_replace('-',' ',$buff6);
	$buff6=str_replace('ä','ae',$buff6);
	$buff6=str_replace('ö','oe',$buff6);
	$buff6=str_replace('ü','ue',$buff6);
	$buff6=str_replace('Ä','Ae',$buff6);
	$buff6=str_replace('Ö','Oe',$buff6);
	$buff6=str_replace('Ü','Ue',$buff6);
	$buff6=str_replace('ß','ss',$buff6);
	
	$buff7=str_replace('-',' ',$buff7);
	$buff7=str_replace('ä','ae',$buff7);
	$buff7=str_replace('ö','oe',$buff7);
	$buff7=str_replace('ü','ue',$buff7);
	$buff7=str_replace('Ä','Ae',$buff7);
	$buff7=str_replace('Ö','Oe',$buff7);
	$buff7=str_replace('Ü','Ue',$buff7);
	$buff7=str_replace('ß','ss',$buff7);
	
	$buff8=str_replace('-',' ',$buff8);
	$buff8=str_replace('ä','ae',$buff8);
	$buff8=str_replace('ö','oe',$buff8);
	$buff8=str_replace('ü','ue',$buff8);
	$buff8=str_replace('Ä','Ae',$buff8);
	$buff8=str_replace('Ö','Oe',$buff8);
	$buff8=str_replace('Ü','Ue',$buff8);
	$buff8=str_replace('ß','ss',$buff8);
	
	*/
	
	// öööööööööö       replaces the Kommentarzeile below: 
	$reco[$satz] = $array[0] . '~' . $array[1] . '~' . $array[2]. '~' . $array[3] . '~' . $array[4] . '~' . $array[5] . '~' . $array[6] . '~' . $array[7] . '~' . $array[8] . '~' ; 	
	//ää $reco[$satz] = substr($array[0],1,8) . '~' . substr($array[1],1,8) . '~' . substr($array[2],1,8) . '~' . substr($array[3],1,8) . '~' . substr($array[4],1,8) . '~' . substr($array[5],1,8)  . '~' . substr($array[6],1,8) . '~' . $array[7] . '~' . $array[8] . '~' ; 	
	
	
	
	// öööööööööö    $reco[$satz] = $buff0 . '~' . $buff1 . '~' . $buff2 . '~' . $buff3 . '~' . $buff4 . '~' . $buff5 . '~' . $buff6 . '~' . $buff7 . '~' . $buff8 . '~' ; 	
	
	// echo $reco[$satz] . '<br/>';
	// echo $array[0];
	// echo $array[1];
	// echo $array[2];
	// echo $array[3];
	// echo $array[4];
	
	
		
	
	$satz = $satz + 1;
	
	}
  
   
  
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  
  // so hiess es im Original, als noch ein Satz retrievt wurde und die einzelnen Felder dann per JSON übergeben wurde.
  //echo json_encode($array);
  echo json_encode($reco);

?>