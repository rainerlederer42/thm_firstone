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
  
  
  //  urspr�nglich, ist richtig, nur zum debuggen �ndern. 
  //�� $result = mysql_query("SELECT nummer, sprache, quiz, frage, antwort1, antwort2, antwort3, antwort4, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");
  
  // $result = mysql_query("SELECT nummer, sprache, quiz, quiz, quiz, quiz, quiz, quiz, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  
  // $result = mysql_query("SELECT nummer, sprache, quiz, frage, quiz, quiz, quiz, quiz, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  
	 $result = mysql_query("SELECT nummer, sprache, quiz, frage, antwort1, antwort2, antwort3, antwort4, richtig FROM $tableName where quiz like 'HIMA_FSCS_%' order by quiz,nummer,sprache");  
  
  // $result = str_replace("<br>","",$result);
  // $result = str_replace("<br/>","",$result);
  
  
  
 
  //$array = mysql_fetch_row($result);                          //fetch result    
  // 130131 jetzt in einer Schleife: 
  
  $satz = 0;
  $reco = array();			// so deklariert man eine Variable als array, 
							// zuf�llige Namensgleichheit mit der Variable 'array' in der n�chsten Zeile.
  
  while($array = mysql_fetch_row($result))
	{	
	// HTML-Tags raus 
    $array=str_replace('<br>',' ',$array);  
    $array=str_replace('<br/>',' ',$array);
  
    $array=str_replace('-',' ',$array);
    $array=str_replace('�','ae',$array);
    $array=str_replace('�','oe',$array);
    $array=str_replace('�','ue',$array);
	
	$array=str_replace('�','Ae',$array);
	$array=str_replace('�','Oe',$array);
	$array=str_replace('�','Ue',$array);
	
    $array=str_replace('�','ss',$array);
	
	// $array=str_replace('-',' ',$array);
    // $array=str_replace('�','a',$array);
    // $array=str_replace('�','o',$array);
    // $array=str_replace('�','u',$array);
    // $array=str_replace('�','s',$array);
	
	
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
	$buff0=str_replace('�','ae',$buff0);
	$buff0=str_replace('�','oe',$buff0);
	$buff0=str_replace('�','ue',$buff0);
	$buff0=str_replace('�','Ae',$buff0);
	$buff0=str_replace('�','Oe',$buff0);
	$buff0=str_replace('�','Ue',$buff0);
	$buff0=str_replace('�','ss',$buff0);
	
	$buff1=str_replace('-',' ',$buff1);
	$buff1=str_replace('�','ae',$buff1);
	$buff1=str_replace('�','oe',$buff1);
	$buff1=str_replace('�','ue',$buff1);
	$buff1=str_replace('�','Ae',$buff1);
	$buff1=str_replace('�','Oe',$buff1);
	$buff1=str_replace('�','Ue',$buff1);
	$buff1=str_replace('�','ss',$buff1);
	
	$buff2=str_replace('-',' ',$buff2);
	$buff2=str_replace('�','ae',$buff2);
	$buff2=str_replace('�','oe',$buff2);
	$buff2=str_replace('�','ue',$buff2);
	$buff2=str_replace('�','Ae',$buff2);
	$buff2=str_replace('�','Oe',$buff2);
	$buff2=str_replace('�','Ue',$buff2);
	$buff2=str_replace('�','ss',$buff2);
	
	$buff3=str_replace('-',' ',$buff3);
	$buff3=str_replace('�','ae',$buff3);
	$buff3=str_replace('�','oe',$buff3);
	$buff3=str_replace('�','ue',$buff3);
	$buff3=str_replace('�','Ae',$buff3);
	$buff3=str_replace('�','Oe',$buff3);
	$buff3=str_replace('�','Ue',$buff3);
	$buff3=str_replace('�','ss',$buff3);
	
	$buff4=str_replace('-',' ',$buff4);
	$buff4=str_replace('�','ae',$buff4);
	$buff4=str_replace('�','oe',$buff4);
	$buff4=str_replace('�','ue',$buff4);
	$buff4=str_replace('�','Ae',$buff4);
	$buff4=str_replace('�','Oe',$buff4);
	$buff4=str_replace('�','Ue',$buff4);
	$buff4=str_replace('�','ss',$buff4);

	$buff5=str_replace('-',' ',$buff5);
	$buff5=str_replace('�','ae',$buff5);
	$buff5=str_replace('�','oe',$buff5);
	$buff5=str_replace('�','ue',$buff5);
	$buff5=str_replace('�','Ae',$buff5);
	$buff5=str_replace('�','Oe',$buff5);
	$buff5=str_replace('�','Ue',$buff5);
	$buff5=str_replace('�','ss',$buff5);	
	
	$buff6=str_replace('-',' ',$buff6);
	$buff6=str_replace('�','ae',$buff6);
	$buff6=str_replace('�','oe',$buff6);
	$buff6=str_replace('�','ue',$buff6);
	$buff6=str_replace('�','Ae',$buff6);
	$buff6=str_replace('�','Oe',$buff6);
	$buff6=str_replace('�','Ue',$buff6);
	$buff6=str_replace('�','ss',$buff6);
	
	$buff7=str_replace('-',' ',$buff7);
	$buff7=str_replace('�','ae',$buff7);
	$buff7=str_replace('�','oe',$buff7);
	$buff7=str_replace('�','ue',$buff7);
	$buff7=str_replace('�','Ae',$buff7);
	$buff7=str_replace('�','Oe',$buff7);
	$buff7=str_replace('�','Ue',$buff7);
	$buff7=str_replace('�','ss',$buff7);
	
	$buff8=str_replace('-',' ',$buff8);
	$buff8=str_replace('�','ae',$buff8);
	$buff8=str_replace('�','oe',$buff8);
	$buff8=str_replace('�','ue',$buff8);
	$buff8=str_replace('�','Ae',$buff8);
	$buff8=str_replace('�','Oe',$buff8);
	$buff8=str_replace('�','Ue',$buff8);
	$buff8=str_replace('�','ss',$buff8);
	
	*/
	
	// ����������       replaces the Kommentarzeile below: 
	$reco[$satz] = $array[0] . '~' . $array[1] . '~' . $array[2]. '~' . $array[3] . '~' . $array[4] . '~' . $array[5] . '~' . $array[6] . '~' . $array[7] . '~' . $array[8] . '~' ; 	
	//�� $reco[$satz] = substr($array[0],1,8) . '~' . substr($array[1],1,8) . '~' . substr($array[2],1,8) . '~' . substr($array[3],1,8) . '~' . substr($array[4],1,8) . '~' . substr($array[5],1,8)  . '~' . substr($array[6],1,8) . '~' . $array[7] . '~' . $array[8] . '~' ; 	
	
	
	
	// ����������    $reco[$satz] = $buff0 . '~' . $buff1 . '~' . $buff2 . '~' . $buff3 . '~' . $buff4 . '~' . $buff5 . '~' . $buff6 . '~' . $buff7 . '~' . $buff8 . '~' ; 	
	
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
  
  // so hiess es im Original, als noch ein Satz retrievt wurde und die einzelnen Felder dann per JSON �bergeben wurde.
  //echo json_encode($array);
  echo json_encode($reco);

?>