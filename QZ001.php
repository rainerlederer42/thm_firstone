<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
	<title>HIMobil Quiz</title>
	<!-- 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	
	-->
	<!-- 
	<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
	--> 
	
	<!--      das da wäre die Version JQM 1.1.1.  Upgedated auf 1.3.0 130228   --> 
	<!--   <link rel="stylesheet" href="jquery.mobile-1.1.1.min.css" />	--> 
	<link rel="stylesheet" href="jquery.mobile-1.3.0.min.css" />
	
	<link type="text/css" href="jquery-ui-1.10.0.custom.min.css" rel="stylesheet" />
	
	<!-- ac = autocomplete --> 
	<link rel="stylesheet" type="text/css" href="ac_style.css" />
	
	<!-- 
	<script type="text/javascript" src="jquery-1.9.0.min.js"></script>
									    jquery-1.9.0.min.js
										
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	-->							        
	
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="jquery-migrate-1.1.0.min.js"></script>
	<script type="text/javascript" src="jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="ac_main.js"></script>
	
	<!-- 
	<script type="text/javascript" src="jquery.mobile-1.2.0.min.js"></script>
	--> 
	
	<!--      das da wäre die Version JQM 1.1.1.  Upgedated auf 1.3.0 130228   --> 
	<!-- <script type="text/javascript" src="jquery.mobile-1.1.1.min.js"></script>   --> 
    <script type="text/javascript" src="jquery.mobile-1.3.0.min.js"></script>
	
	

</head>
<body>






<script type="text/javascript">
$(document).ready(function(){

 //  ist in der Fkt weiter unten gemacht, nach dem Füllen der textarea aus dem JSON Arrays
 // $("#q1fe").hide();
 // $("#q2fe").hide();
 // $("#q3fe").hide();
 
});
</script>








<script type="text/javascript">
$(document).ready(function(){

 $(function () {

    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    var date = new Date();
	$.ajax({                                      
      url: 'qz_aufgaben_api_nosql.php',      //the script to call to get data          
      data: 'time='+date.getTime(),                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
      
	  
	    
        //     würde 'mal sagen, der folgende Abschnitt wird nicht mehr gebraucht     	  
		var id = data[0];              //get id
        var vname = data[1];           //get name
		var egal = data[2];
		var egaler = data[3];
		var oops = data[4];
		var aaps = data[5];
		
		var wwstr = "";
		
		
		
		// alert ("Feld0: " + data[0]);
		// alert ("Feld1: " + data[1]);
		// alert ("Feld2: " + data[2]);
		// alert ("Feld3: " + data[3]);
		// alert ("Feld4: " + data[4]);
		// alert ("Feld5: " + data[5]);
		// alert ("Feld6: " + data[6]);
		// alert ("Feld7: " + data[7]);
		// alert ("Feld8: " + data[8]);
		// alert ("Feld9: " + data[9]);
		
		
		
		
		
		
		//  Schleife durch das JSON Array: Start hier       vvvvvvvvvvvvvvvvvvvvv 
		for (var ii = 0; ii <= 9; ii++)
		{
		
		
		wwstr = data[ii];

		// alert(wwstr);
		
		var postilde01 = wwstr.indexOf('~');
		var part01 = wwstr.substr(0, postilde01);	// nummer		
		var nummer = part01;
		wwstr = wwstr.substr(postilde01+1);		

		var postilde02 = wwstr.indexOf('~');
		var part02 = wwstr.substr(0, postilde02);	// sprache
		var sprache = part02;
		wwstr = wwstr.substr(postilde02+1);

		var postilde03 = wwstr.indexOf('~');
		var part03 = wwstr.substr(0, postilde03);	// quiz-art
		var quizart = part03;
		wwstr = wwstr.substr(postilde03+1);

		var postilde04 = wwstr.indexOf('~');
		var part04 = wwstr.substr(0, postilde04);	// frage
		wwstr = wwstr.substr(postilde04+1);

		var postilde05 = wwstr.indexOf('~');
		var part05 = wwstr.substr(0, postilde05);	// antw1
		wwstr = wwstr.substr(postilde05+1);

		var postilde06 = wwstr.indexOf('~');
		var part06 = wwstr.substr(0, postilde06);	// antw2
		wwstr = wwstr.substr(postilde06+1);

		var postilde07 = wwstr.indexOf('~');
		var part07 = wwstr.substr(0, postilde07);	// antw3
		wwstr = wwstr.substr(postilde07+1);

		var postilde08 = wwstr.indexOf('~');
		var part08 = wwstr.substr(0, postilde08);	// antw4
		wwstr = wwstr.substr(postilde08+1);

		var postilde09 = wwstr.indexOf('~');
		var part09 = wwstr.substr(0, postilde09);	// richtig				
		wwstr = wwstr.substr(postilde09+1);
		
		
		// Es sind erst 'mal nur 5 Fragen,   aber wohlgemerkt je 5 für FSCS_F und je 5 für FSCS_P
		//									ausserdem das ganze noch ( x 2 ) wegen de- en-  Sprache 
		
		
		
		// Beispiel für den fertigen String:    Bf_1DF     Bf_ = Buffer    1 = Frage1    D = Deutsch    F = Factory
		//var placename = 'xxxBf_';
		
		// das mit dem placename war ja nur am Anfang zum Testen, wie man mit einer 
		//    JavaScript-Variablen ein HTML-Div ansprechen kann. 
		
		
		
		//     würde 'mal sagen, der folgende Abschnitt wird nicht mehr gebraucht     	  
		var whichfragment = '';		
		whichfragment = nummer;
		whichfragment = whichfragment + sprache;
		
		
		
		var placename = 'Bf_';
		placename = placename + nummer;
		placename = placename + sprache;
		
		// HIMA_FSCS_F
		// 01234567890		
		var quizartshort = quizart.substr(10,1);	// F or P 
		placename = placename + quizartshort;
		
		
		//     würde 'mal sagen, der folgende Abschnitt wird nicht mehr gebraucht     	  
		whichfragment = whichfragment + quizartshort;
		
		
		
		
		// jetzt habe ich in whichfragment drin' stehen zum Beispiel:  
		// 		1DF   Frage 1 Deutsch Factory 
		
		
		// Ich benötige zwar einen Schleifenzähler von (1...10) , um durch das JSON Array zu loopen,
		//   aber massgeblich für die Verarbeitung ist für mich folgendes: 
		//   Im Feld "nummer" steht die Frage Nummer (also 1 ... 5). 
		//   Das sind immer Dubletten wegen de/en Sprache. 
		
		
		
		//  nochmals zur Erinnerung:    das feld für die Frage 01 heisst
		
		
		//     würde 'mal sagen, der folgende Abschnitt wird nicht mehr gebraucht     	  
		// alert ("This is the placename: " + placename);
		
		
		switch (placename)
		{
			case 'Bf_1DF':
					$('#questf01d').html(part04);
					$('#splabel_answ_f01_1d').html(part05);
					$('#splabel_answ_f01_2d').html(part06);
					$('#splabel_answ_f01_3d').html(part07);
					$('#splabel_answ_f01_4d').html(part08);			
					break;			
			
			case 'Bf_1EF':
					$('#questf01e').html(part04);				 					 
					$('#splabel_answ_f01_1e').html(part05);
					$('#splabel_answ_f01_2e').html(part06);
					$('#splabel_answ_f01_3e').html(part07);
					$('#splabel_answ_f01_4e').html(part08);			
					break;			
			
			case 'Bf_2DF':					
					$('#questf02d').html(part04);
					$('#splabel_answ_f02_1d').html(part05);
					$('#splabel_answ_f02_2d').html(part06);
					$('#splabel_answ_f02_3d').html(part07);
					$('#splabel_answ_f02_4d').html(part08);			
					break;
			
			case 'Bf_2EF':					
					$('#questf02e').html(part04);	
					$('#splabel_answ_f02_1e').html(part05);
					$('#splabel_answ_f02_2e').html(part06);
					$('#splabel_answ_f02_3e').html(part07);
					$('#splabel_answ_f02_4e').html(part08);			
					break;
			
			case 'Bf_3DF':
					$('#questf03d').html(part04);
					$('#splabel_answ_f03_1d').html(part05);
					$('#splabel_answ_f03_2d').html(part06);
					$('#splabel_answ_f03_3d').html(part07);
					$('#splabel_answ_f03_4d').html(part08);			
					break;
					
			case 'Bf_3EF':
					$('#questf03e').html(part04);
					$('#splabel_answ_f03_1e').html(part05);
					$('#splabel_answ_f03_2e').html(part06);
					$('#splabel_answ_f03_3e').html(part07);
					$('#splabel_answ_f03_4e').html(part08);			
					break;
			
			case 'Bf_4DF':
					$('#questf04d').html(part04);
					$('#splabel_answ_f04_1d').html(part05);
					$('#splabel_answ_f04_2d').html(part06);
					$('#splabel_answ_f04_3d').html(part07);
					$('#splabel_answ_f04_4d').html(part08);			
					break;
					
			case 'Bf_4EF':
					$('#questf04e').html(part04);
					$('#splabel_answ_f04_1e').html(part05);
					$('#splabel_answ_f04_2e').html(part06);
					$('#splabel_answ_f04_3e').html(part07);
					$('#splabel_answ_f04_4e').html(part08);			
					break;					
					
			case 'Bf_5DF':
					$('#questf05d').html(part04);
					$('#splabel_answ_f05_1d').html(part05);
					$('#splabel_answ_f05_2d').html(part06);
					$('#splabel_answ_f05_3d').html(part07);
					$('#splabel_answ_f05_4d').html(part08);			
					break;
					
			case 'Bf_5EF':
					$('#questf05e').html(part04);
					$('#splabel_answ_f05_1e').html(part05);
					$('#splabel_answ_f05_2e').html(part06);
					$('#splabel_answ_f05_3e').html(part07);
					$('#splabel_answ_f05_4e').html(part08);			
					break;
					
					
			
		}		// switch (placename)
		
		
				
				
		
		// $('#xxxBf_1DF').html(placename+" should be xxxBf_1DF"); 		
				
		// $(placename).html(placename+" should be xxxBf_1DF"); 				
		
		//$('#'+placename).html(placename+" should be xxxBf_1DF"); 				
		
		// so heisst ein echtes Div, hier auf dieser Seite :   Bf_1DF 
		// 		also ändere ich oben das  var placename = 'xxxBf_';    in    var placename = 'Bf_';
		
		
		
		
		//  130228        $('#'+placename).html(placename+" should be xxxBf_1DF"); 				
		
		
		
		
		
		
		
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
        // $('#ajax_output').html("<b>id: </b>"+id+"<b> name: </b>"+vname+"--"+egal+"~~~"+egaler+"---"+oops+"xxx"+aaps); //Set output element html
		
		// mit der Spaghetti-Konstruktion:
		// $('#ajax_output').html("***"+part01+"***"+part02+"***"+part03+"***"+part04+"***"+part05+"***"+part06+"***"+part07+"***"+part08+"***"+part09+"ÖÖÖ" ); //Set output element html
		$('#ajax_output').html("***"+placename+"***"+part02+"***"+part03+"***"+part04+"***"+part05+"***"+part06+"***"+part07+"***"+part08+"***"+part09+"ÖÖÖ" ); //Set output element html
		
		
		//     das hier schreibt testweise eine Antwort in die dafür vorgesehene Position: Frage1, Antwort1, auf der Seite 1 des Qz 
		
		
		
		//     würde 'mal sagen, der folgende Abschnitt wird nicht mehr gebraucht     	  
		// $('#splabel_answ_f01_1').text(part05);
		
		
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
		
		
		
		}
		//  Schleife durch das JSON Array: Ende hier       ^^^^^^^^^^^^^^^^^^^^^^^^
		
		
		$("#q1fe").hide();
		$("#q2fe").hide();
		$("#q3fe").hide();
		$("#q4fe").hide();
		$("#q5fe").hide();
		
      } 	// success: function(data)          //on recieve of reply
	  
    });

});
});
</script>


<script type="text/javascript">
$(document).ready(function(){
$("#send_test_mail").click(function(){


	$.ajax({
		url: 'try_sendmail.php',
		success: function() {
			alert('Test Email sent (hopefully!) ');
		}
	});

});
});
</script>



<script type="text/javascript">
$(document).ready(function(){
$("#cl").click(function(){
   
   alert("HELLO WORLD!");
	
	
	
	$(function () {

    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
	
	alert("in Dollar function");
	
    
	
	

});
	
	
	
	// $("input[type='radio']:first").attr("checked",true).checkboxradio("refresh");
	
	// $("input[@name='rdio']:checked").val()
	
	//      $("input[@name='language']:checked").checkboxradio("refresh");
	
	// $("input[type='radio']").checkboxradio('disable');
	
	$("input[type='radio']").checkboxradio('refresh');
	
	
});
});
</script>


    <script type="text/javascript">
	$(document).ready(function() {	
	    
		buttonChange();		
	});
	function buttonChange(){
				$("#sel_language").change(function(){	
			
			    alert(" Klick");
				$("#language1".text("dsdsdsdsdsdsd");
			
		});
	}
  </script>


  
 	
  <script type="text/javascript">
$(document).ready(function() {
	// $(":radio").bind ("change", function (event)
	$("#sel_language :radio").bind ("change", function (event)
	{	 
	  if (	$("input#language1").attr ("checked"))
		{
		$('#splabel_en').text("english");	  
		$('#splabel_de').text("german");	  
		$('#splabel_fa').text("FS in machine automation");	  
		$('#splabel_pi').text("FS in process industry");	  
		$('#ue_qztype').text("Choose quiz type:");
		$('#ue_language').text("Language:");
		$('#bt_kontakt').text("Contact");
		$('#bt_qz_start').text("Start quiz");		
		$('.bt_prev').text("prev.");				
		$('.bt_next').text("next");				

		
		
		$("#q1fe").show();
		$("#q1fd").hide();
		$("#q2fe").show();
		$("#q2fd").hide();
		$("#q3fe").show();
		$("#q3fd").hide();		
		$("#q4fe").show();
		$("#q4fd").hide();
		$("#q5fe").show();
		$("#q5fd").hide();
		

		
	  };
	
	  if (	$("input#language2").attr ("checked"))
		{
		$('#splabel_en').text("englisch");	  
		$('#splabel_de').text("deutsch");	  
		$('#splabel_fa').text("FS in der Fabr.-automat.");	  
		$('#splabel_pi').text("FS i. d. Prozessindustrie");	  
		$('#ue_qztype').text("Thema des Quiz:");
		$('#ue_language').text("Sprache:");
		$('#bt_kontakt').text("Kontakt");
		$('#bt_qz_start').text("Quiz starten");
		$('.bt_prev').text("zurueck");				
		$('.bt_next').text("weiter");				

		
		$("#q1fd").show();
		$("#q1fe").hide();
		$("#q2fd").show();
		$("#q2fe").hide();
		$("#q3fd").show();
		$("#q3fe").hide();
		
		$("#q4fd").show();
		$("#q4fe").hide();
		
		$("#q5fd").show();
		$("#q5fe").hide();
		
	    }	  
	  
	  
	});
	})	
</script>




  <script type="text/javascript">
$(document).ready(function() {
	// $(":radio").bind ("change", function (event)
	$("#sel_quiztype :radio").bind ("change", function (event)
	{	 
	  if (	$("input#qztype1").attr ("checked"))
		{		
		$("#lnktoqp01").attr("href", "#qz01f");		
	    };
	
	  if (	$("input#qztype2").attr ("checked"))
		{
		$("#lnktoqp01").attr("href", "#qz01p");		
	    }	    
	  
	});
	})	
</script>

  
  
 
<div data-role="page" id="home">
  <div data-role="header"><h1>HIMA quiz</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  <div data-role="content" id="xyxyxyxy"> 
	<div id="p1z1">
		<!-- 
		<p>Hier könnte noch ein Text stehen, aber der wäre ja oberhalb vom Logo !!! </p>
		--> 
	</div> 
	
	<!--
	<div id="logobild">
		<img src="himobil001.JPG" width="185" height="116" border="1" >
	</div>
	-->
	
	<div id="logobild" style="width:90%; margin-left:5%;">
	<!-- <div id="logobild">   -->
		<!-- <img style="display:block; width:100%; max-width:100%;" id="firstimage" src="himobil001.jpg" /> -->
		<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="himobil001.jpg" />
	</div>
	

	<br>
	<br>
	
	
	<!--  Intermezzo Ausflug Prototyping autocomplete   vvvvvvvvvvvvvvvvv  --> 
	
	<form action="search.php">
	    <input type="text" id="acsearch" name="acsearch" /> <input type="submit" name="acsubmit" value="Suchen 140620a" />
	</form>
	<div id="acresults"></div>
	
	
	<!--  Intermezzo Ausflug testweise eine POP3 email verschicken   ^^^^^^^^^^^^^^^^^  -->
	
	
	<br>
	<br>
    <button id="send_test_mail">Send Email 140621</button>
	
	
	<!-- nach Klick auf diesen Button müsste ich eigentlich diese php Fkt. ausführen: 
	<!--    invite_by_mail_to_new_wk1 ($crea_vn, $crea_nn, $crea_datti_ger, $wkbez1, $wkbez2, $start_datti_ger, $ende_datti_ger, $this_recip_vn, $this_recip_nn, $this_recip_e, $this_recip_link);

	<!-- aber wie geht dsa noch 'mal ???????? 140621   --> 
	
	
	
	<!--  Intermezzo Ausflug Prototyping autocomplete   ^^^^^^^^^^^^^^^^^  -->
	
	<br>
	<br>
    <button id="cl">Click Me 140620a</button>
	
	<h3>Output: </h3>
	<div id="ajax_output">this element will be accessed by jquery and this text replaced</div>
	
	<!--   130228
	<h3>Test 130222: </h3>
	<div id="xxxBf_1DF"> ID=xxxBf_1DF </div>
	<h3>Test 130222 vorbei ab hier. </h3>
	--> 
	
	
	<!--   130228
	<div id="Bf_1DF">Bf_1DF</div>
	<div id="Bf_1EF">Bf_1EF</div>	
	<div id="Bf_2DF">Bf_2DF</div>
	<div id="Bf_2EF">Bf_2EF</div>	
	<div id="Bf_3DF">Bf_3DF</div>
	<div id="Bf_3EF">Bf_3EF</div>	
	<div id="Bf_4DF">Bf_4DF</div>
	<div id="Bf_4EF">Bf_4EF</div>	
	<div id="Bf_5DF">Bf_5DF</div>
	<div id="Bf_5EF">Bf_5EF</div>
	
	<div id="Bf_1DP">Bf_1DP</div>
	<div id="Bf_1EP">Bf_1EP</div>	
	<div id="Bf_2DP">Bf_2DP</div>
	<div id="Bf_2EP">Bf_2EP</div>	
	<div id="Bf_3DP">Bf_3DP</div>
	<div id="Bf_3EP">Bf_3EP</div>	
	<div id="Bf_4DP">Bf_4DP</div>
	<div id="Bf_4EP">Bf_4EP</div>	
	<div id="Bf_5DP">Bf_5DP</div>
	<div id="Bf_5EP">Bf_5EP</div>
	--> 
	
	
	
	
				    	
   	<span id="ue_qztype"> Thema des Quiz : </span>

	<div data-role=controlgroup id="sel_quiztype">			 
	
	 <!-- Fabrik Automatisierung = FS in machine automation --> 
	  <label id="label_fa" for="qztype1"> <span id="splabel_fa">FS in der Fabrikautomatisierung</span> </label>
	  <input type="radio" id="qztype1" name="qztype" checked="checked" />
			
	 <!-- Process industry = Prozessindustrie --> 
	  <label id="label_pi" for="qztype2"> <span id="splabel_pi">FS in der Prozessindustrie</span> </label>
	  <input type="radio" id="qztype2" name="qztype" />
    	   
	</div>		<!-- Ende control-group -->


   	<span id="ue_language">Sprache : </span>

	<div data-role=controlgroup id="sel_language">			 			 
	  
	  <label id="label_en" for="language1"> <span id="splabel_en">englisch</span> </label>
	  <input type="radio" id="language1" name="language" />
	  
	  <label id="label_de" for="language2"> <span id="splabel_de">deutsch</span> </label>
	  <input type="radio" id="language2" name="language" checked="checked" />	  
    
	</div>		<!-- Ende control-group -->
	
    


    	
	
	
	
	
	<!-- 
  	<p><a href="#kontakt" data-theme="a" data-icon="check" data-role="button"  data-transition="pop">Kontakt aufnehmen</a></p>
	--> 
	
	
	<!--
	<p><a href="#qz01f" id="lnktoqp01" data-theme="a" data-icon="check" data-role="button"  data-transition="pop">Quiz starten</a></p>
	--> 
	<p><a href="#qz01f" id="lnktoqp01" data-theme="a" data-icon="check" data-role="button"  data-transition="pop"><span id="bt_qz_start">Quiz starten</span></a></p>
	
	
	
	
	
	
	
  </div>	  <!--  data-role="content" id="xyxyxyxy"  -->
  <div data-role="footer"><h3>Footer der Seite</h3></div>
</div>		<!--   data-role="page" id="home"   -->
 
 
 
 
 <!--  Q Seite 1 P                            -->
 
 <div data-role="page" id="qz01p">
  <div data-role="header"><h1>Kontaktseite</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 1 Prizess</p>
    <div data-role="fieldcontain">
	
    	<span>Q Page 1 PPPPPPPPPPPP  </span>		
		
    </div>
  </div>
  <div data-role="footer"><h3>Footer der Seite</h3></div>
</div>		<!-- qzo1p  --> 
 
 



 
 
 
 
 <!--  Q Seite 1 F                            -->
 
 <div data-role="page" id="qz01f">
  <div data-role="header"><h1>Kontaktseite</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 1 Factory</p>
    
	
    	<span>Q Page 1 FFFFFFFF  </span>		
		
		<div data-role="fieldcontain" id="q1fd">
		
		<label for="questf01d">Frage 1 von 5:</label>
		<br/>
		
		<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf01d"></textarea>
					
			
			<div data-role=controlgroup id="cg_answ_f01d"> 
	  
				<label id="label_en" for="r_answ_f01_1d"> <span id="splabel_answ_f01_1d">Antw 01-1 F</span> </label>
				<input type="radio" id="r_answ_f01_1d" name="answ_f01d" />
	  
				<label id="label_en" for="r_answ_f01_2d"> <span id="splabel_answ_f01_2d">Antw 01-2 F</span> </label>
				<input type="radio" id="r_answ_f01_2d" name="answ_f01d" />

				<label id="label_en" for="r_answ_f01_3d"> <span id="splabel_answ_f01_3d">Antw 01-3 F</span> </label>
				<input type="radio" id="r_answ_f01_3d" name="answ_f01d" />

				<label id="label_en" for="r_answ_f01_4d"> <span id="splabel_answ_f01_4d">Antw 01-4 F</span> </label>
				<input type="radio" id="r_answ_f01_4d" name="answ_f01d" />

				
			</div>		<!-- Ende control-group -->
			
			
		
		</div>		<!-- fieldcontain  id="q1fd" --> 
		
				
		<!-- en-version page 1 --> 
		<div data-role="fieldcontain" id="q1fe">
		
		<label for="questf01e">Question 1 of 5:</label>
		<br/>
		
		<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf01e"></textarea>
					
			
			<div data-role=controlgroup id="cg_answ_f01e"> 
	  
				<label id="label_en" for="r_answ_f01_1e"> <span id="splabel_answ_f01_1e">Antw 01-1 F</span> </label>
				<input type="radio" id="r_answ_f01_1e" name="answ_f01e" />
	  
				<label id="label_en" for="r_answ_f01_2e"> <span id="splabel_answ_f01_2e">Antw 01-2 F</span> </label>
				<input type="radio" id="r_answ_f01_2e" name="answ_f01e" />

				<label id="label_en" for="r_answ_f01_3e"> <span id="splabel_answ_f01_3e">Antw 01-3 F</span> </label>
				<input type="radio" id="r_answ_f01_3e" name="answ_f01e" />

				<label id="label_en" for="r_answ_f01_4e"> <span id="splabel_answ_f01_4e">Antw 01-4 F</span> </label>
				<input type="radio" id="r_answ_f01_4e" name="answ_f01e" />

				
			</div>		<!-- Ende control-group -->
			
			
		
		</div>		<!-- fieldcontain  id="q1fe" --> 
			
    
  </div>
  
  <div data-role="navbar">
    <ul>
        <li><a href="#" class="ui-disabled"><span class="bt_prev">zurueck</span></a></li>
        <li><a href="#qz02f"><span class="bt_next">weiter</span></a></li>
    </ul>
  </div>
    
  <div data-role="footer">
		<h3>Footer der Seite</h3>
  </div>
</div>		<!-- qzo1f  --> 






 <!--  Q Seite 2 F                            -->
 
 <div data-role="page" id="qz02f">
  <div data-role="header"><h1>Kontaktseite</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 2 Factory</p>
    	
    	<span>Q Page 2 FFFFFFFF  </span>		
		
		<div data-role="fieldcontain" id="q2fd">
		
		<label for="questf02d">Frage 2 von 5:</label>
		<br/>
		
		<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf02d"></textarea>					
			
			<div data-role=controlgroup id="cg_answ_f02d">			 			 
	  
				<label id="label_en" for="r_answ_f02_1d"> <span id="splabel_answ_f02_1d">Antw 02-1 F</span> </label>
				<input type="radio" id="r_answ_f02_1d" name="answ_f02d" />
	  
				<label id="label_en" for="r_answ_f02_2d"> <span id="splabel_answ_f02_2d">Antw 02-2 F</span> </label>
				<input type="radio" id="r_answ_f02_2d" name="answ_f02d" />

				<label id="label_en" for="r_answ_f02_3d"> <span id="splabel_answ_f02_3d">Antw 02-3 F</span> </label>
				<input type="radio" id="r_answ_f02_3d" name="answ_f02d" />

				<label id="label_en" for="r_answ_f02_4d"> <span id="splabel_answ_f02_4d">Antw 02-4 F</span> </label>
				<input type="radio" id="r_answ_f02_4d" name="answ_f02d" />

				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain   id="q2fd" --> 
		
		
		<!-- en-version page 2 --> 		
		
		<div data-role="fieldcontain" id="q2fe">
		
		<label for="questf02e">Question 2 of 5:</label>
		<br/>
		
		<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf02e"></textarea>					
			
			<div data-role=controlgroup id="cg_answ_f02e">			 			 
	  
				<label id="label_en" for="r_answ_f02_1e"> <span id="splabel_answ_f02_1e">Antw 02-1 F</span> </label>
				<input type="radio" id="r_answ_f02_1e" name="answ_f02e" />
	  
				<label id="label_en" for="r_answ_f02_2e"> <span id="splabel_answ_f02_2e">Antw 02-2 F</span> </label>
				<input type="radio" id="r_answ_f02_2e" name="answ_f02e" />

				<label id="label_en" for="r_answ_f02_3e"> <span id="splabel_answ_f02_3e">Antw 02-3 F</span> </label>
				<input type="radio" id="r_answ_f02_3e" name="answ_f02e" />

				<label id="label_en" for="r_answ_f02_4e"> <span id="splabel_answ_f02_4e">Antw 02-4 F</span> </label>
				<input type="radio" id="r_answ_f02_4e" name="answ_f02e" />
				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain   id="q2fe" --> 
			
    
  </div>
  
  <div data-role="navbar">
    <ul>
        <li><a href="#qz01f"><span class="bt_prev">zurueck</span></a></li>
        <li><a href="#qz03f"><span class="bt_next">weiter</span></a></li>
    </ul>
  </div>
    
  <div data-role="footer">
		<h3>Footer der Seite</h3>
  </div>
</div>		<!-- qzo2f  --> 

 
 
 
 
 
 <!--  Q Seite 3 F                            -->
 
 <div data-role="page" id="qz03f">
  <div data-role="header"><h1>Kontaktseite</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 3 Factory</p>
    	
    	<span>Q Page 3 FFFFFFFF  </span>		
		
		<div data-role="fieldcontain" id="q3fd">
		
		<label for="questf03d">Frage 3 von 5:</label>
		<br/>
		
		<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf03d"></textarea>
					
			
			<div data-role=controlgroup id="cg_answ_f03d">			 			 
	  
				<label id="label_en" for="r_answ_f03_1d"> <span id="splabel_answ_f03_1d">Antw 03-1 F</span> </label>
				<input type="radio" id="r_answ_f03_1d" name="answ_f03d" />
	  
				<label id="label_en" for="r_answ_f03_2d"> <span id="splabel_answ_f03_2d">Antw 03-2 F</span> </label>
				<input type="radio" id="r_answ_f03_2d" name="answ_f03d" />

				<label id="label_en" for="r_answ_f03_3d"> <span id="splabel_answ_f03_3d">Antw 03-3 F</span> </label>
				<input type="radio" id="r_answ_f03_3d" name="answ_f03d" />

				<label id="label_en" for="r_answ_f03_4d"> <span id="splabel_answ_f03_4d">Antw 03-4 F</span> </label>
				<input type="radio" id="r_answ_f03_4d" name="answ_f03d" />

				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain     id="q3fd" --> 
		
		
		<!-- en-version page 3 --> 		
		<div data-role="fieldcontain" id="q3fe">
		
		<label for="questf03e">Question 3 of 5:</label>
		<br/>
		
		<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf03e"></textarea>
					
			
			<div data-role=controlgroup id="cg_answ_f03e">			 			 
	  
				<label id="label_en" for="r_answ_f03_1e"> <span id="splabel_answ_f03_1e">Antw 03-1 F</span> </label>
				<input type="radio" id="r_answ_f03_1e" name="answ_f03e" />
	  
				<label id="label_en" for="r_answ_f03_2e"> <span id="splabel_answ_f03_2e">Antw 03-2 F</span> </label>
				<input type="radio" id="r_answ_f03_2e" name="answ_f03e" />

				<label id="label_en" for="r_answ_f03_3e"> <span id="splabel_answ_f03_3e">Antw 03-3 F</span> </label>
				<input type="radio" id="r_answ_f03_3e" name="answ_f03e" />

				<label id="label_en" for="r_answ_f03_4e"> <span id="splabel_answ_f03_4e">Antw 03-4 F</span> </label>
				<input type="radio" id="r_answ_f03_4e" name="answ_f03e" />

				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain     id="q3fe" --> 
		
    
  </div>
  
  <div data-role="navbar">
    <ul>
        <li><a href="#qz02f"><span class="bt_prev">zurueck</span></a></li>
        <li><a href="#qz04f"><span class="bt_next">weiter</span></a></li>
    </ul>
  </div>
    
  <div data-role="footer">
	<h3>Footer der Seite</h3>
  </div>
</div>		<!-- qzo3f  --> 
 


 <!--  Q Seite 4 F                            -->
 
 <div data-role="page" id="qz04f">
    <div data-role="header">
		<h1>Kontaktseite</h1>
	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#kontakt">Kontakt</a></li>
		</ul>
	</div>
  
  <div data-role="content">
  	<p>Quiz Seite 4 Factory</p>
    	
    	<span>Q Page 3 FFFFFFFF  </span>		
		
		<div data-role="fieldcontain" id="q4fd">
		
		    <label for="questf04d">Frage 4 von 5:</label>
		    <br/>
		
		    <textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf04d"></textarea>				
			
			<div data-role=controlgroup id="cg_answ_f04d">			 			 
	  
				<label id="label_en" for="r_answ_f04_1d"> <span id="splabel_answ_f04_1d">Antw 04-1 F</span> </label>
				<input type="radio" id="r_answ_f04_1d" name="answ_f04d" />
	  
				<label id="label_en" for="r_answ_f04_2d"> <span id="splabel_answ_f04_2d">Antw 04-2 F</span> </label>
				<input type="radio" id="r_answ_f04_2d" name="answ_f04d" />

				<label id="label_en" for="r_answ_f04_3d"> <span id="splabel_answ_f04_3d">Antw 04-3 F</span> </label>
				<input type="radio" id="r_answ_f04_3d" name="answ_f04d" />

				<label id="label_en" for="r_answ_f04_4d"> <span id="splabel_answ_f04_4d">Antw 04-4 F</span> </label>
				<input type="radio" id="r_answ_f04_4d" name="answ_f04d" />
				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain     id="q4fd" --> 
		
		
		<!-- en-version page 4 --> 		
		<div data-role="fieldcontain" id="q4fe">
		
			<label for="questf04e">Question 4 of 5:</label>
			<br/>
		
			<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf04e"></textarea>					
			
			<div data-role=controlgroup id="cg_answ_f04e">			 			 
	  
				<label id="label_en" for="r_answ_f04_1e"> <span id="splabel_answ_f04_1e">Answ 04-1 F</span> </label>
				<input type="radio" id="r_answ_f04_1e" name="answ_f04e" />
	  
				<label id="label_en" for="r_answ_f04_2e"> <span id="splabel_answ_f04_2e">Answ 04-2 F</span> </label>
				<input type="radio" id="r_answ_f04_2e" name="answ_f04e" />

				<label id="label_en" for="r_answ_f04_3e"> <span id="splabel_answ_f04_3e">Answ 04-3 F</span> </label>
				<input type="radio" id="r_answ_f04_3e" name="answ_f04e" />

				<label id="label_en" for="r_answ_f04_4e"> <span id="splabel_answ_f04_4e">Answ 04-4 F</span> </label>
				<input type="radio" id="r_answ_f04_4e" name="answ_f04e" />

				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain     id="q4fe" --> 		
    
  </div>
  
  <div data-role="navbar">
    <ul>
        <li><a href="#qz03f"><span class="bt_prev">zurueck</span></a></li>
        <li><a href="#qz05f"><span class="bt_next">weiter</span></a></li>
    </ul>
  </div>
    
  <div data-role="footer">
	<h3>Footer der Seite</h3>
  </div>
  </div>		<!-- qzo4f  --> 
 

 
 
 

 <!--  Q Seite 5 F                            -->
 
 <div data-role="page" id="qz05f">
    <div data-role="header">
		<h1>Kontaktseite</h1>
	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#kontakt">Kontakt</a></li>
		</ul>
	</div>
  
  <div data-role="content">
  	<p>Quiz Seite 5 Factory</p>
    	
    	<span>Q Page 5 FFFFFFFF  </span>		
		
		<div data-role="fieldcontain" id="q5fd">
		
		    <label for="questf04d">Frage 5 von 5:</label>
		    <br/>
		
		    <textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf05d"></textarea>				
			
			<div data-role=controlgroup id="cg_answ_f05d">			 			 
	  
				<label id="label_en" for="r_answ_f05_1d"> <span id="splabel_answ_f05_1d">Antw 05-1 F</span> </label>
				<input type="radio" id="r_answ_f05_1d" name="answ_f05d" />
	  
				<label id="label_en" for="r_answ_f05_2d"> <span id="splabel_answ_f05_2d">Antw 05-2 F</span> </label>
				<input type="radio" id="r_answ_f05_2d" name="answ_f05d" />

				<label id="label_en" for="r_answ_f05_3d"> <span id="splabel_answ_f05_3d">Antw 05-3 F</span> </label>
				<input type="radio" id="r_answ_f05_3d" name="answ_f05d" />

				<label id="label_en" for="r_answ_f05_4d"> <span id="splabel_answ_f05_4d">Antw 05-4 F</span> </label>
				<input type="radio" id="r_answ_f05_4d" name="answ_f05d" />
				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain     id="q5fd" --> 
		
		
		<!-- en-version page 5 --> 		
		<div data-role="fieldcontain" id="q5fe">
		
			<label for="questf05e">Question 5 of 5:</label>
			<br/>
		
			<textarea  readonly="readonly" cols="40" rows="8" name="textarea" id="questf05e"></textarea>					
			
			<div data-role=controlgroup id="cg_answ_f05e">			 			 
	  
				<label id="label_en" for="r_answ_f05_1e"> <span id="splabel_answ_f05_1e">Answ 05-1 F</span> </label>
				<input type="radio" id="r_answ_f05_1e" name="answ_f05e" />
	  
				<label id="label_en" for="r_answ_f05_2e"> <span id="splabel_answ_f05_2e">Answ 05-2 F</span> </label>
				<input type="radio" id="r_answ_f05_2e" name="answ_f05e" />

				<label id="label_en" for="r_answ_f05_3e"> <span id="splabel_answ_f05_3e">Answ 05-3 F</span> </label>
				<input type="radio" id="r_answ_f05_3e" name="answ_f05e" />

				<label id="label_en" for="r_answ_f05_4e"> <span id="splabel_answ_f05_4e">Answ 05-4 F</span> </label>
				<input type="radio" id="r_answ_f05_4e" name="answ_f05e" />

				
			</div>		<!-- Ende control-group -->
					
		</div>		<!-- fieldcontain     id="q5fe" --> 		
    
  </div>
  
  <div data-role="navbar">
    <ul>
        <li><a href="#qz04f""><span class="bt_prev">zurueck</span></a></li>
        <li><a href="#" class="ui-disabled"><span class="bt_next">weiter</span></a></li>		
    </ul>
  </div>
    
  <div data-role="footer">
	<h3>Footer der Seite</h3>
  </div>
  </div>		<!-- qzo5f  --> 
 
 




 








 
 
 
 
 
<div data-role="page" id="kontakt">
  <div data-role="header"><h1>Kontaktseite</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Kontaktinformationen</p>
    <div data-role="fieldcontain">
    	<form action="form.php" method="post">
        <label for="name">Namen eingeben:</label>
    	<input type="text" name="name" id="name" value=""  />
 
        <label for="email">E-Mail eingeben:</label>
    	<input type="email" name="email" id="email" value=""  />
 
        <label for="textarea">Nachricht:</label>
		<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
 
        </form>
    </div>
  </div>
  <div data-role="footer"><h3>Footer der Seite</h3></div>
</div>
 
</body>
</html>
