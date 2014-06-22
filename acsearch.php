	<?php
	    // mysql_connect("localhost","root","PASSWORT") or die ("Keine Verbindung moeglich");
	    // mysql_select_db("DATENBANK") or die ("Die Datenbank existiert nicht");
	    // mysql_query("SET NAMES 'utf8'");



  		$host = "212.116.4.136";
		$user = "hima_ssweb";
		$pass = "ssweb";

  		$databaseName = "himadata";
  		$tableName = "aufgabe";

		$con = mysql_connect($host,$user,$pass);
		$dbs = mysql_select_db($databaseName, $con);

	    mysql_query("SET NAMES 'utf8'");
		
	    // $result = mysql_query("SELECT * FROM articles WHERE text LIKE '%" . $_GET['search'] . "%' LIMIT 5");

		// search wird vom js-Script aus als Parameter übergeben. Das ist der Inhalt vom Eingabefeld 

		// $result = mysql_query("SELECT * from aufgabe where frage like '" . $_GET['search'] . "%' LIMIT 5" );		
		// $result = mysql_query("SELECT * from aufgabe where frage like '" . $_GET['search'] . "%'" );
		$result = mysql_query("SELECT * from aufgabe where frage like '" . $_GET['search'] . "%' LIMIT 5" );

	     echo $result;



	    while($row = mysql_fetch_object($result))
	    {
	        echo '<p>';
	        echo preg_replace('/(' . $_GET['search'] . ')/Usi', '<span class="result">\\1</span>', $row->frage);
	        echo '</p>';
	    }
	?>