<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
	<title>HAMI Quiz</title>
	<!-- 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	
	-->
	<!-- 
	<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
	--> 
	
	<!--      das da wäre die Version JQM 1.1.1.  Upgedated auf 1.3.0 130228   --> 
	<!--   <link rel="stylesheet" href="jquery.mobile-1.1.1.min.css" />	--> 
	
	
	
	
	<!--  das muss noch überprüft werden. Ich sehe da gar nix von BS !!!!!     --> 
	
	<link rel="stylesheet" href="themes/Bootstrap.css">
		
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
	
	
	
	
		
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		
	<!-- ac = autocomplete --> 
	<link rel="stylesheet" type="text/css" href="ac_style.css" />
		


	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		
	<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
	<script type="text/javascript" src="ac_main.js"></script>	
	
	
	
	
	
	
	
	
	
	

</head>
<body>



<!-- Checkbox ja ich erlaube due Speicherung  der Daten überwachen um Absende Submit Button zu aktivieren -->
<!--  neuerdings unten im Code im Div dieser Page   --> 






<!-- auf Betätigung des Buttons zum Abschicken der Kontakt-Nachricht reagieren -->
    <script>
        function onSuccess(data, status)
        {
            data = $.trim(data);
            $("#contactnotification").text(data);
        }
  
        function onError(data, status)
        {
            // handle an error
        }       
  
        $(document).ready(function() {
		    
            $("li#bt_send_contact").click(function(){			
 
				alert("bt_send_contact clicked");	
				
				location.href = "#confirm_contact";
 
                var formData = $("#contactform").serialize();
  
                $.ajax({
                    type: "POST",
                    url: "send_qz_contact.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });  
                return false;				
				
            });
        });
    </script>


	







<!-- auf Betätigung des Buttons zum Abschicken der Quiz-Tipps reagieren -->
    <script>
        function onSuccess(data, status)
        {
            data = $.trim(data);
            $("#qznotification").text(data);
        }
  
        function onError(data, status)
        {
            // handle an error
        }       
  
        $(document).ready(function() {
		    // $("#qzsubmit").click(function(){
            $("li#bt_sendguess").click(function(){
			
			
 
				alert("bt_sendguess clicked");
				// not sure with that    141002 
				//  das bewirkt die Weiterleitung auf die Seite config, 
				//   aber  wird dann auch das Ajax ausgeführt ?????? 
				//   
				
				// Snoopy   weitermachen   continue     141002   
				
				
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				//  ***************************************************************************************************
				
				
				
				location.href = "#confirm";
				
				// 141009
 
                var formData = $("#callAjaxForm").serialize();
  
                $.ajax({
                    type: "POST",
                    url: "send_qz_guess.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });
  
                return false;
				
				
            });
        });
    </script>









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
		for (var ii = 0; ii <= 18; ii++)
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
					
					
				
			// Process Quiz start here 	
			
			case 'Bf_1DP':
					$('#questp01d').html(part04);
					$('#splabel_answ_p01_1d').html(part05);
					$('#splabel_answ_p01_2d').html(part06);
					$('#splabel_answ_p01_3d').html(part07);
					$('#splabel_answ_p01_4d').html(part08);			
					break;			
			
			case 'Bf_1EP':
					$('#questp01e').html(part04);				 					 
					$('#splabel_answ_p01_1e').html(part05);
					$('#splabel_answ_p01_2e').html(part06);
					$('#splabel_answ_p01_3e').html(part07);
					$('#splabel_answ_p01_4e').html(part08);			
					break;						
					
			
			case 'Bf_2DP':
					$('#questp02d').html(part04);
					$('#splabel_answ_p02_1d').html(part05);
					$('#splabel_answ_p02_2d').html(part06);
					$('#splabel_answ_p02_3d').html(part07);
					$('#splabel_answ_p02_4d').html(part08);			
					break;			
			
			case 'Bf_2EP':
					$('#questp02e').html(part04);				 					 
					$('#splabel_answ_p02_1e').html(part05);
					$('#splabel_answ_p02_2e').html(part06);
					$('#splabel_answ_p02_3e').html(part07);
					$('#splabel_answ_p02_4e').html(part08);			
					break;						
			
			case 'Bf_3DP':
					$('#questp03d').html(part04);
					$('#splabel_answ_p03_1d').html(part05);
					$('#splabel_answ_p03_2d').html(part06);
					$('#splabel_answ_p03_3d').html(part07);
					$('#splabel_answ_p03_4d').html(part08);			
					break;			
			
			case 'Bf_3EP':
					$('#questp03e').html(part04);				 					 
					$('#splabel_answ_p03_1e').html(part05);
					$('#splabel_answ_p03_2e').html(part06);
					$('#splabel_answ_p03_3e').html(part07);
					$('#splabel_answ_p03_4e').html(part08);			
					break;						
					
			case 'Bf_4DP':
					$('#questp04d').html(part04);
					$('#splabel_answ_p04_1d').html(part05);
					$('#splabel_answ_p04_2d').html(part06);
					$('#splabel_answ_p04_3d').html(part07);
					$('#splabel_answ_p04_4d').html(part08);			
					break;			
			
			case 'Bf_4EP':
					$('#questp04e').html(part04);				 					 
					$('#splabel_answ_p04_1e').html(part05);
					$('#splabel_answ_p04_2e').html(part06);
					$('#splabel_answ_p04_3e').html(part07);
					$('#splabel_answ_p04_4e').html(part08);			
					break;						
															
			case 'Bf_5DP':
					$('#questp05d').html(part04);
					$('#splabel_answ_p05_1d').html(part05);
					$('#splabel_answ_p05_2d').html(part06);
					$('#splabel_answ_p05_3d').html(part07);
					$('#splabel_answ_p05_4d').html(part08);			
					break;			
			
			case 'Bf_5EP':
					$('#questp05e').html(part04);				 					 
					$('#splabel_answ_p05_1e').html(part05);
					$('#splabel_answ_p05_2e').html(part06);
					$('#splabel_answ_p05_3e').html(part07);
					$('#splabel_answ_p05_4e').html(part08);			
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
		
		
		$("#q1pe").hide();
		$("#q2pe").hide();
		$("#q3pe").hide();
		$("#q4pe").hide();
		$("#q5pe").hide();
		
      } 	// success: function(data)          //on recieve of reply
	  
    });

});
});
</script>


<!--  140818  Qz-Seiten 1 ...5 auf de- Version vor-einstellen   --> 
<!--     150225 und die Kontzakt-Seite gleich miterledigen      --> 


	<!-- <script type="text/javascript">	-->
	<!-- $(document).ready(function(){ 		--> 

	<script type="text/javascript">
	$( window ).load(function() {


		// ich probiere 'mal auf Factory - deutsch zu initialisieren ...........
		
		// 140818   $("#lnktoqp01").attr("href", "#qz01f");		
		$('input[name=my_qtype]').val('F');
	
		// 140818
		// $("a.lnktoqp01").attr("href", "#qz01f");
		// hmmm  das da funzt aber:    $("#lnktoqp01").attr("href", "#qz01f");		
		$("a#lnktoqp01").attr("href", "#qz01f"); 
	
		
		// Vorlage:    $('input:radio[name="answ_f01d"]').removeAttr('checked');
	
	
		// Check #x   Factory Qz-Type setzen
		$( "#qztype1" ).prop( "checked", true );

		// Uncheck #x  Process Qz-type unchecken 
		$( "#qztype2" ).prop( "checked", false );
		
		
		// 140820 
		$( "#qztype1" ).checkboxradio("refresh");
		$( "#qztype2" ).checkboxradio("refresh");
	
		// das da funzt net  140819 $('[name="qztype"][value="false"]').attr("checked", true).trigger("change");
	
		$("#q1fe").hide();	
		$("#q2fe").hide();
		$("#q3fe").hide();
		$("#q4fe").hide();
		$("#q5fe").hide();
		
		$("#q1pe").hide();
		$("#q2pe").hide();
		$("#q3pe").hide();
		$("#q4pe").hide();
		$("#q5pe").hide();

		
		// $("#kont_01e").hide();
		$("#kont_02e").hide();
		$("#kont_03e").hide();
		
		

});
</script>



<!-- Achtung, das geht wohl nur auf der ersten angezeigten Seite gut !!!! Siehe 
	Don't use $(document).ready(...); Read the first yellow box in the documentation: 
		http://jquerymobile.com/demos/1.2.0/docs/api/events.html
-->
		
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

    <!--  140715    Duty     Ist das nachfiolgende Script noch aktuel bzw. noetig  ???????????????? -->
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


  <!-- 140715 impproved --> 
 	
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
		$('#bt_kontakt_k').text("Contact");
		
		// 150302 
		// $('#sendcontactmessage').value("krmplflpmpfl");
		
		
		
		
		
		$('#bt_qz_start').text("Start quiz");		
		
		
		
		// $('input#sendcontactmessage').text('Ummpfff engl');
		// $('#sendcontactmessage').prev('.ui-btn-inner').children('.ui-btn-text').html('Ummpfff engl');
		$('#sendcontactmessage').text("Ummpfff engl");
		
		$('#bt_qz_about').text("About");		
		$('#bt_qz_help').text("Help");		
		
		
		$('.bt_prev').text("prev.");				
		$('.bt_next').text("next");				
		
		// 140715  Sprache hidden in Kontakt-Form
		$('input[name=my_language]').val('E');

		
		
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
		
		
		$("#q1pe").show();
		$("#q1pd").hide();
		$("#q2pe").show();
		$("#q2pd").hide();
		$("#q3pe").show();
		$("#q3pd").hide();		
		$("#q4pe").show();
		$("#q4pd").hide();
		$("#q5pe").show();
		$("#q5pd").hide();
		
		
		//150226
		// $("#kont_01d").hide();
		// $("#kont_01e").show();
		
		$("#kont_02d").hide();
		$("#kont_02e").show();
		
		$("#kont_03d").hide();
		$("#kont_03e").show();
		

		
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
		$('#bt_kontakt_k').text("Kontakt");
			
		$('#bt_qz_start').text("Quiz starten");
		
		// 150226
		// $('input#sendcontactmessage').text('Arrrghghghhg');
		// $('#sendcontactmessage').prev('.ui-btn-inner').children('.ui-btn-text').html('Arrrghghghhg');
		$('#sendcontactmessage').text("Arrrghghghhg");
		$('#sendcontactmessage').text("Arrrghghghhg");
		
		
		
		$('#bt_qz_about').html("&Uuml;ber");		
		$('#bt_qz_help').text("Hilfe");		
		
		$('.bt_prev').text("zurueck");				
		$('.bt_next').text("weiter");				

		// 140715  Sprache hidden in Kontakt-Form
		$('input[name=my_language]').val('D');
		
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
		
		
		// Process
		$("#q1pd").show();
		$("#q1pe").hide();
		$("#q2pd").show();
		$("#q2pe").hide();
		$("#q3pd").show();
		$("#q3pe").hide();
		$("#q4pd").show();
		$("#q4pe").hide();
		$("#q5pd").show();
		$("#q5pe").hide();
		
		
		//150224
		// $("#kont_01d").show();
		// $("#kont_01e").hide();
		
		$("#kont_02d").show();
		$("#kont_02e").hide();
		
		$("#kont_03d").show();
		$("#kont_03e").hide();
		
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
		// $("#lnktoqp01").attr("href", "#qz01f");		
		$('input[name=my_qtype]').val('F');
		
		// 140818
		$("a#lnktoqp01").attr("href", "#qz01f");
		
		
	    };
	
	  if (	$("input#qztype2").attr ("checked"))
		{
		// $("#lnktoqp01").attr("href", "#qz01p");		
		$('input[name=my_qtype]').val('P');
		
		// 140818
		$("a#lnktoqp01").attr("href", "#qz01p");
	    }	    
	  
	});
  })	
</script>

  
  
 
<div data-role="page" id="home" data-theme="a">


  <div data-role="header"><h1>HAMI Quiz</h1></div>
	  <div data-role="navbar">
		<ul>
			<li><a href="#home" data-icon="home">Home</a></li>
			<li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
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
	

	<br></br>
	<br></br>
	
	
	
	<!--  Intermezzo Ausflug Prototyping autocomplete   vvvvvvvvvvvvvvvvv  --> 
	
	<form action="search.php">
	    <input type="text" id="acsearch" name="acsearch" /> <input type="submit" name="acsubmit" value="Suchen 140620a -- 150512-1920!!!" />
	</form>
	<div id="acresults"></div>
	
	
	<!--  Intermezzo Ausflug testweise eine POP3 email verschicken   ^^^^^^^^^^^^^^^^^  -->
	
	
	<br></br>
	<br></br>
    <button id="send_test_mail">Send Email 140621</button>
	
	
	<!-- nach Klick auf diesen Button müsste ich eigentlich diese php Fkt. ausführen: 
	<!--    invite_by_mail_to_new_wk1 ($crea_vn, $crea_nn, $crea_datti_ger, $wkbez1, $wkbez2, $start_datti_ger, $ende_datti_ger, $this_recip_vn, $this_recip_nn, $this_recip_e, $this_recip_link);

	<!-- aber wie geht dsa noch 'mal ???????? 140621   --> 
	
	
	
	<!--  Intermezzo Ausflug Prototyping autocomplete   ^^^^^^^^^^^^^^^^^  -->
	
	<br></br>
	<br></br>
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

	<div id="sel_quiztype">			 
      <fieldset data-role="controlgroup">			 			 
	
	 <!-- Fabrik Automatisierung = FS in machine automation --> 
	 
	 
	  <!-- vor H-140701
	  <label id="label_fa" for="qztype1"> <span id="splabel_fa">FS in der Fabrikautomatisierung</span> </label>
	  <input type="radio" id="qztype1" name="qztype" checked="checked" />
	  -->
		
   	  <input type="radio" id="qztype1" name="qztype" checked="checked" value="qztype-1" />
	  <label id="label_fa" for="qztype1"> <span id="splabel_fa">FS in der Fabrikautomatisierung</span> </label>
			
	<!--		Vorlage 140701  siehe Mitschrift gleiches Datum
		<input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"  />
     	<label for="radio-choice-2">Dog</label>
	-->
			
	 <!-- Process industry = Prozessindustrie --> 
	  <label id="label_pi" for="qztype2"> <span id="splabel_pi">FS in der Prozessindustrie</span> </label>
	  <input type="radio" id="qztype2" name="qztype" />
    
      </fieldset>	
	</div>		<!-- Ende control-group -->

	
	

	
	

   	<span id="ue_language">Sprache : </span>

	<div id="sel_language">
      <fieldset data-role="controlgroup">			 			 
	  
	  <label id="label_en" for="language1"> <span id="splabel_en">englisch</span> </label>
	  <input type="radio" id="language1" name="language" />
	  
	  <label id="label_de" for="language2"> <span id="splabel_de">deutsch</span> </label>
	  <input type="radio" id="language2" name="language" checked="checked" />	  
    
	  </fieldset>
	</div>		<!-- Ende control-group -->
	
    


    	
	
	
	
	
	<!-- 
  	<p><a href="#kontakt" data-theme="a" data-icon="check" data-role="button"  data-transition="pop">Kontakt aufnehmen</a></p>
	--> 
	
	
	<!--
	<p><a href="#qz01f" id="lnktoqp01" data-theme="a" data-icon="check" data-role="button"  data-transition="pop">Quiz starten</a></p>
	--> 
	
</div>		<!-- data-role="content" -->
			
 
<div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#" id="lnktoqp01" data-icon="grid"><span id="bt_qz_start">Quiz starten</span></a></li>
		  <li><a href="#qz01f" id="lnktoqabout" data-icon="info"><span id="bt_qz_about">&Uuml;ber</span></a></li>
		  <li><a href="#qz01f" id="lnktoqhelp" data-inline="true" data-icon="plus"><span id="bt_qz_help">Hilfe</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
</div>
</div>		<!--   data-role="page" id="home"   -->
 
 
 
 
 

 

 
 


 
 
 
 
 <!--  Q Seite 1 F                            -->
 
 <div data-role="page" id="qz01f" data-title="HAMI Quiz (1/5)">
  <div data-role="header" data-position="fixed"><h1>HAMI Quiz</h1>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  </div>
  
  
  
  <div data-role="content">
  	<p>Quiz Seite 1 Factory</p>
    
	
    	<span>Q Page 1 FFFFFFFF  </span>		
		
		<div id="logobild" style="width:90%; margin-left:5%;">				
			<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="hyp002__f148__970x185.jpg" />
		</div>
		<br></br>
		
		
		<div id="q1fd">
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf01d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f01_1d"> <span id="splabel_answ_f01_1d">Antw 01-1 F</span>
							<input type="radio" id="r_answ_f01_1d" name="answ_f01d" />
						</label>
						<label for="r_answ_f01_2d"> <span id="splabel_answ_f01_2d">Antw 01-2 F</span>
							<input type="radio" id="r_answ_f01_2d" name="answ_f01d" />
						</label>
						<label for="r_answ_f01_3d"> <span id="splabel_answ_f01_3d">Antw 01-3 F</span>
							<input type="radio" id="r_answ_f01_3d" name="answ_f01d" />
						</label>
						<label for="r_answ_f01_4d"> <span id="splabel_answ_f01_4d">Antw 01-4 F</span>
							<input type="radio" id="r_answ_f01_4d" name="answ_f01d" />
						</label>

				</div>
			</fieldset>
		</div>
		
		<!-- en-version page 1 --> 

		<div id="q1fe">
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf01e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f01_1e"> <span id="splabel_answ_f01_1e">Antw 01-1 F</span>
							<input type="radio" id="r_answ_f01_1e" name="answ_f01e" />
						</label>
						<label for="r_answ_f01_2e"> <span id="splabel_answ_f01_2e">Antw 01-2 F</span>
							<input type="radio" id="r_answ_f01_2e" name="answ_f01e" />
						</label>
						<label for="r_answ_f01_3e"> <span id="splabel_answ_f01_3e">Antw 01-3 F</span>
							<input type="radio" id="r_answ_f01_3e" name="answ_f01e" />
						</label>
						<label for="r_answ_f01_4e"> <span id="splabel_answ_f01_4e">Antw 01-4 F</span>
							<input type="radio" id="r_answ_f01_4e" name="answ_f01e" />
						</label>

				</div>
			</fieldset>
		</div>
			
    
  </div>	<!--  data-role="content"  -->
  
<div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#" class="ui-disabled" data-icon="arrow-l"><span class="bt_prev">zurueck</span></a></li>
		  <li><a href="#qz02f" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
</div>

</div>		<!-- qz01f  --> 






 <!--  Q Seite 2 F                            -->
 
 <div data-role="page" id="qz02f" data-title="HAMI Quiz (2/5)">
  <div data-role="header"><h1>HAMI Quiz</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 2 Factory</p>
	
	<div id="logobild" style="width:90%; margin-left:5%;">				
			<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="hyp015e _f148__970x185.jpg" />
	</div>
	<br></br>
    	
    	<span>Q Page 2 FFFFFFFF  </span>		
		
		<!-- de-version page 2 --> 

		<div id="q2fd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf02d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f02_1d"> <span id="splabel_answ_f02_1d">Antw 02-1 F</span>
							<input type="radio" id="r_answ_f02_1d" name="answ_f02d" />
						</label>
						<label for="r_answ_f02_2d"> <span id="splabel_answ_f02_2d">Antw 02-2 F</span>
							<input type="radio" id="r_answ_f02_2d" name="answ_f02d" />
						</label>
						<label for="r_answ_f02_3d"> <span id="splabel_answ_f02_3d">Antw 02-3 F</span>
							<input type="radio" id="r_answ_f02_3d" name="answ_f02d" />
						</label>
						<label for="r_answ_f02_4d"> <span id="splabel_answ_f02_4d">Antw 02-4 F</span>
							<input type="radio" id="r_answ_f02_4d" name="answ_f02d" />
						</label>

				</div>
			</fieldset>
		</div> 
				
		
		<!-- de-version page 2 --> 

		<div id="q2fe">	
		<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf02e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f02_1e"> <span id="splabel_answ_f02_1e">Antw 02-1 F</span>
							<input type="radio" id="r_answ_f02_1e" name="answ_f02e" />
						</label>
						<label for="r_answ_f02_2e"> <span id="splabel_answ_f02_2e">Antw 02-2 F</span>
							<input type="radio" id="r_answ_f02_2e" name="answ_f02e" />
						</label>
						<label for="r_answ_f02_3e"> <span id="splabel_answ_f02_3e">Antw 02-3 F</span>
							<input type="radio" id="r_answ_f02_3e" name="answ_f02e" />
						</label>
						<label for="r_answ_f02_4e"> <span id="splabel_answ_f02_4e">Antw 02-4 F</span>
							<input type="radio" id="r_answ_f02_4e" name="answ_f02e" />
						</label>

				</div>
			</fieldset>
		</div> 
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz01f" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qz03f" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>
</div>		<!-- qzo2f  --> 

 
 
 
 
 
 <!--  Q Seite 3 F                            -->
 
 <div data-role="page" id="qz03f" data-title="HAMI Quiz (3/5)">
  <div data-role="header"><h1>HAMI Quiz</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 3 Factory</p>
    	
	<div id="logobild" style="width:90%; margin-left:5%;">				
			<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="hyp020a_f148__970x185.jpg" />
	</div>
	<br></br>
		
    	<span>Q Page 3 FFFFFFFF  </span>			

		<!-- de-version page 3 --> 

		<div id="q3fd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf03d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f03_1d"> <span id="splabel_answ_f03_1d">Antw 03-1 F</span>
							<input type="radio" id="r_answ_f03_1d" name="answ_f03d" />
						</label>
						<label for="r_answ_f03_2d"> <span id="splabel_answ_f03_2d">Antw 03-2 F</span>
							<input type="radio" id="r_answ_f03_2d" name="answ_f03d" />
						</label>
						<label for="r_answ_f03_3d"> <span id="splabel_answ_f03_3d">Antw 03-3 F</span>
							<input type="radio" id="r_answ_f03_3d" name="answ_f03d" />
						</label>
						<label for="r_answ_f03_4d"> <span id="splabel_answ_f03_4d">Antw 03-4 F</span>
							<input type="radio" id="r_answ_f03_4d" name="answ_f03d" />
						</label>

				</div>
			</fieldset>
		</div> 

		<!-- en-version page 3 --> 

		<div id="q3fe">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf03e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f03_1e"> <span id="splabel_answ_f03_1e">Antw 03-1 F</span>
							<input type="radio" id="r_answ_f03_1e" name="answ_f03e" />
						</label>
						<label for="r_answ_f03_2e"> <span id="splabel_answ_f03_2e">Antw 03-2 F</span>
							<input type="radio" id="r_answ_f03_2e" name="answ_f03e" />
						</label>
						<label for="r_answ_f03_3e"> <span id="splabel_answ_f03_3e">Antw 03-3 F</span>
							<input type="radio" id="r_answ_f03_3e" name="answ_f03e" />
						</label>
						<label for="r_answ_f03_4e"> <span id="splabel_answ_f03_4e">Antw 03-4 F</span>
							<input type="radio" id="r_answ_f03_4e" name="answ_f03e" />
						</label>

				</div>
			</fieldset>
		</div> 
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz02f" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qz04f" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>

</div>		<!-- qzo3f  --> 
 


 <!--  Q Seite 4 F                            -->
 
<div data-role="page" id="qz04f" data-title="HAMI Quiz (4/5)">
    <div data-role="header">
		<h1>HAMI Quiz</h1>
	</div>
	<div data-role="navbar">
		<ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
		</ul>
	</div>
  
  <div data-role="content">
  	<p>Quiz Seite 4 Factory</p>
	<div id="logobild" style="width:90%; margin-left:5%;">				
			<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="hyp020b_f148__970x185.jpg" />
	</div>
	<br></br>
    	
    	<span>Q Page 4 FFFFFFFF  </span>			
		
		<!-- de-version page 4 --> 

		<div id="q4fd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf04d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f04_1d"> <span id="splabel_answ_f04_1d">Antw 04-1 F</span>
							<input type="radio" id="r_answ_f04_1d" name="answ_f04d" />
						</label>
						<label for="r_answ_f04_2d"> <span id="splabel_answ_f04_2d">Antw 04-2 F</span>
							<input type="radio" id="r_answ_f04_2d" name="answ_f04d" />
						</label>
						<label for="r_answ_f04_3d"> <span id="splabel_answ_f04_3d">Antw 04-3 F</span>
							<input type="radio" id="r_answ_f04_3d" name="answ_f04d" />
						</label>
						<label for="r_answ_f04_4d"> <span id="splabel_answ_f04_4d">Antw 04-4 F</span>
							<input type="radio" id="r_answ_f04_4d" name="answ_f04d" />
						</label>

				</div>
			</fieldset>
		</div> 
		
		<!-- en-version page 4 --> 

		<div id="q4fe">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf04e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f04_1e"> <span id="splabel_answ_f04_1e">Antw 04-1 F</span>
							<input type="radio" id="r_answ_f04_1e" name="answ_f04e" />
						</label>
						<label for="r_answ_f04_2e"> <span id="splabel_answ_f04_2e">Antw 04-2 F</span>
							<input type="radio" id="r_answ_f04_2e" name="answ_f04e" />
						</label>
						<label for="r_answ_f04_3e"> <span id="splabel_answ_f04_3e">Antw 04-3 F</span>
							<input type="radio" id="r_answ_f04_3e" name="answ_f04e" />
						</label>
						<label for="r_answ_f04_4e"> <span id="splabel_answ_f04_4e">Antw 04-4 F</span>
							<input type="radio" id="r_answ_f04_4e" name="answ_f04e" />
						</label>

				</div>
			</fieldset>
		</div> 
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz03f" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qz05f" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>

</div>		<!-- qzo4f  --> 
 

 
 
 

 <!--  Q Seite 5 F                            -->
 
 <div data-role="page" id="qz05f" data-title="HAMI Quiz (5/5)">
    <div data-role="header">
		<h1>HAMI Quiz</h1>
	</div>
	<div data-role="navbar">
		<ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
		</ul>
	</div>
  
  <div data-role="content">
  	<p>Quiz Seite 5 Factory</p>
    	
    	<span>Q Page 5 FFFFFFFF  </span>		
		<div id="logobild" style="width:90%; margin-left:5%;">				
			<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="hyp020c_f148__970x185.jpg" />
		</div>
		<br></br>
					
		<!-- de-version page 5 --> 

		<div id="q5fd">	
		<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf05d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f05_1d"> <span id="splabel_answ_f05_1d">Antw 05-1 F</span>
							<input type="radio" id="r_answ_f05_1d" name="answ_f05d" />
						</label>
						<label for="r_answ_f05_2d"> <span id="splabel_answ_f05_2d">Antw 05-2 F</span>
							<input type="radio" id="r_answ_f05_2d" name="answ_f05d" />
						</label>
						<label for="r_answ_f05_3d"> <span id="splabel_answ_f05_3d">Antw 05-3 F</span>
							<input type="radio" id="r_answ_f05_3d" name="answ_f05d" />
						</label>
						<label for="r_answ_f05_4d"> <span id="splabel_answ_f05_4d">Antw 05-4 F</span>
							<input type="radio" id="r_answ_f05_4d" name="answ_f05d" />
						</label>

				</div>
			</fieldset>
		</div> 

		<!-- en-version page 5 --> 

		<div id="q5fe">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questf05e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_f05_1e"> <span id="splabel_answ_f05_1e">Antw 05-1 F</span>
							<input type="radio" id="r_answ_f05_1e" name="answ_f05e" />
						</label>
						<label for="r_answ_f05_2e"> <span id="splabel_answ_f05_2e">Antw 05-2 F</span>
							<input type="radio" id="r_answ_f05_2e" name="answ_f05e" />
						</label>
						<label for="r_answ_f05_3e"> <span id="splabel_answ_f05_3e">Antw 05-3 F</span>
							<input type="radio" id="r_answ_f05_3e" name="answ_f05e" />
						</label>
						<label for="r_answ_f05_4e"> <span id="splabel_answ_f05_4e">Antw 05-4 F</span>
							<input type="radio" id="r_answ_f05_4e" name="answ_f05e" />
						</label>
				</div>
				
			</fieldset>
		</div> 		
		
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz04f" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qzsendguess" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>		  
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>
</div>		<!-- qzo5f  --> 
 
 
 
 

<!-- Factory Quiz   page 1 ... 5 ends here  -->
<!-- #####################################  -->
<!-- #####################################  -->


 
 
 
 
<!-- Process Quiz   Page 1 ... 5 starts here   --> 


 <!--  Q Seite 1 F                            -->
 
 <div data-role="page" id="qz01p" data-title="HAMI Quiz P (1/5)">
  <div data-role="header" data-position="fixed"><h1>HAMI Quiz P</h1>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  </div>
  
  
  
  <div data-role="content">
  	<p>Quiz Seite 1 Process</p>
    
	
    	<span>Q Page 1 PPPPP  </span>		
		
		<div id="q1pd">
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp01d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p01_1d"> <span id="splabel_answ_p01_1d">Antw 01-1 P</span>
							<input type="radio" id="r_answ_p01_1d" name="answ_p01d" />
						</label>
						<label for="r_answ_p01_2d"> <span id="splabel_answ_p01_2d">Antw 01-2 P</span>
							<input type="radio" id="r_answ_p01_2d" name="answ_p01d" />
						</label>
						<label for="r_answ_p01_3d"> <span id="splabel_answ_p01_3d">Antw 01-3 P</span>
							<input type="radio" id="r_answ_p01_3d" name="answ_p01d" />
						</label>
						<label for="r_answ_p01_4d"> <span id="splabel_answ_p01_4d">Antw 01-4 P</span>
							<input type="radio" id="r_answ_p01_4d" name="answ_p01d" />
						</label>

				</div>
			</fieldset>
		</div>
		
		<!-- en-version page 1 --> 

		<div id="q1pe">
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp01e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p01_1e"> <span id="splabel_answ_p01_1e">Antw 01-1 P</span>
							<input type="radio" id="r_answ_p01_1e" name="answ_p01e" />
						</label>
						<label for="r_answ_p01_2e"> <span id="splabel_answ_p01_2e">Antw 01-2 P</span>
							<input type="radio" id="r_answ_p01_2e" name="answ_p01e" />
						</label>
						<label for="r_answ_p01_3e"> <span id="splabel_answ_p01_3e">Antw 01-3 P</span>
							<input type="radio" id="r_answ_p01_3e" name="answ_p01e" />
						</label>
						<label for="r_answ_p01_4e"> <span id="splabel_answ_p01_4e">Antw 01-4 P</span>
							<input type="radio" id="r_answ_p01_4e" name="answ_p01e" />
						</label>

				</div>
			</fieldset>
		</div>
			
    
  </div>	<!--  data-role="content"  -->
  
<div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#" class="ui-disabled" data-icon="arrow-l"><span class="bt_prev">zurueck</span></a></li>
		  <li><a href="#qz02p" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
</div>

</div>		<!-- qz01p  --> 




 <!--  Q Seite 2 P                            -->
 
 <div data-role="page" id="qz02p" data-title="HAMI Quiz (2/5)">
  <div data-role="header"><h1>HAMI Quiz</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 2 Process</p>
    	
    	<span>Q Page 2 PPPP  </span>		
		
		<!-- de-version page 2  P --> 

		<div id="q2pd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp02d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p02_1d"> <span id="splabel_answ_p02_1d">Antw 02-1 P</span>
							<input type="radio" id="r_answ_p02_1d" name="answ_p02d" />
						</label>
						<label for="r_answ_p02_2d"> <span id="splabel_answ_p02_2d">Antw 02-2 P</span>
							<input type="radio" id="r_answ_p02_2d" name="answ_p02d" />
						</label>
						<label for="r_answ_p02_3d"> <span id="splabel_answ_p02_3d">Antw 02-3 P</span>
							<input type="radio" id="r_answ_p02_3d" name="answ_p02d" />
						</label>
						<label for="r_answ_p02_4d"> <span id="splabel_answ_p02_4d">Antw 02-4 P</span>
							<input type="radio" id="r_answ_p02_4d" name="answ_p02d" />
						</label>

				</div>
			</fieldset>
		</div> 
				
		
		<!-- en-version page 2  P --> 

		<div id="q2pe">	
		<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp02e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p02_1e"> <span id="splabel_answ_p02_1e">Antw 02-1 P</span>
							<input type="radio" id="r_answ_p02_1e" name="answ_p02e" />
						</label>
						<label for="r_answ_p02_2e"> <span id="splabel_answ_p02_2e">Antw 02-2 P</span>
							<input type="radio" id="r_answ_p02_2e" name="answ_p02e" />
						</label>
						<label for="r_answ_p02_3e"> <span id="splabel_answ_p02_3e">Antw 02-3 P</span>
							<input type="radio" id="r_answ_p02_3e" name="answ_p02e" />
						</label>
						<label for="r_answ_p02_4e"> <span id="splabel_answ_p02_4e">Antw 02-4 P</span>
							<input type="radio" id="r_answ_p02_4e" name="answ_p02e" />
						</label>

				</div>
			</fieldset>
		</div> 
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz01p" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qz03p" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>
</div>		<!-- qzo2p  --> 

 
 
 
 
 
 <!--  Q Seite 3 P                            -->
 
 <div data-role="page" id="qz03p" data-title="HAMI Quiz (3/5)">
  <div data-role="header"><h1>HAMI Quiz</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
    </ul>
  </div>
  <div data-role="content">
  	<p>Quiz Seite 3 Process</p>
    	
    	<span>Q Page 3 PPPP  </span>			

		<!-- de-version page 3 --> 

		<div id="q3pd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp03d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p03_1d"> <span id="splabel_answ_p03_1d">Antw 03-1 P</span>
							<input type="radio" id="r_answ_p03_1d" name="answ_p03d" />
						</label>
						<label for="r_answ_p03_2d"> <span id="splabel_answ_p03_2d">Antw 03-2 P</span>
							<input type="radio" id="r_answ_p03_2d" name="answ_p03d" />
						</label>
						<label for="r_answ_p03_3d"> <span id="splabel_answ_p03_3d">Antw 03-3 P</span>
							<input type="radio" id="r_answ_p03_3d" name="answ_p03d" />
						</label>
						<label for="r_answ_p03_4d"> <span id="splabel_answ_p03_4d">Antw 03-4 P</span>
							<input type="radio" id="r_answ_p03_4d" name="answ_p03d" />
						</label>

				</div>
			</fieldset>
		</div> 

		<!-- en-version page 3 --> 

		<div id="q3pe">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp03e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p03_1e"> <span id="splabel_answ_p03_1e">Antw 03-1 P</span>
							<input type="radio" id="r_answ_p03_1e" name="answ_p03e" />
						</label>
						<label for="r_answ_p03_2e"> <span id="splabel_answ_p03_2e">Antw 03-2 P</span>
							<input type="radio" id="r_answ_p03_2e" name="answ_p03e" />
						</label>
						<label for="r_answ_p03_3e"> <span id="splabel_answ_p03_3e">Antw 03-3 P</span>
							<input type="radio" id="r_answ_p03_3e" name="answ_p03e" />
						</label>
						<label for="r_answ_p03_4e"> <span id="splabel_answ_p03_4e">Antw 03-4 P</span>
							<input type="radio" id="r_answ_p03_4e" name="answ_p03e" />
						</label>

				</div>
			</fieldset>
		</div> 
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz02p" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qz04p" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>

</div>		<!-- qzo3p  --> 
 
 
 


 <!--  Q Seite 4 P                            -->
 
<div data-role="page" id="qz04p" data-title="HAMI Quiz (4/5)">
    <div data-role="header">
		<h1>HAMI Quiz</h1>
	</div>
	<div data-role="navbar">
		<ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
		</ul>
	</div>
  
  <div data-role="content">
  	<p>Quiz Seite 4 Process</p>
    	
    	<span>Q Page 4 PPPP  </span>			
		
		<!-- de-version page 4 --> 

		<div id="q4pd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp04d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p04_1d"> <span id="splabel_answ_p04_1d">Antw 04-1 P</span>
							<input type="radio" id="r_answ_p04_1d" name="answ_p04d" />
						</label>
						<label for="r_answ_p04_2d"> <span id="splabel_answ_p04_2d">Antw 04-2 P</span>
							<input type="radio" id="r_answ_p04_2d" name="answ_p04d" />
						</label>
						<label for="r_answ_p04_3d"> <span id="splabel_answ_p04_3d">Antw 04-3 P</span>
							<input type="radio" id="r_answ_p04_3d" name="answ_p04d" />
						</label>
						<label for="r_answ_p04_4d"> <span id="splabel_answ_p04_4d">Antw 04-4 P</span>
							<input type="radio" id="r_answ_p04_4d" name="answ_p04d" />
						</label>

				</div>
			</fieldset>
		</div> 
		
		<!-- en-version page 4 --> 

		<div id="q4pe">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp04e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p04_1e"> <span id="splabel_answ_p04_1e">Antw 04-1 P</span>
							<input type="radio" id="r_answ_p04_1e" name="answ_p04e" />
						</label>
						<label for="r_answ_p04_2e"> <span id="splabel_answ_p04_2e">Antw 04-2 P</span>
							<input type="radio" id="r_answ_p04_2e" name="answ_p04e" />
						</label>
						<label for="r_answ_p04_3e"> <span id="splabel_answ_p04_3e">Antw 04-3 P</span>
							<input type="radio" id="r_answ_p04_3e" name="answ_p04e" />
						</label>
						<label for="r_answ_p04_4e"> <span id="splabel_answ_p04_4e">Antw 04-4 P</span>
							<input type="radio" id="r_answ_p04_4e" name="answ_p04e" />
						</label>

				</div>
			</fieldset>
		</div> 
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz03p" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qz05p" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>

</div>		<!-- qzo4p  --> 
 

 
 
 

 <!--  Q Seite 5 P                            --> 
 
 <div data-role="page" id="qz05p" data-title="HAMI Quiz (5/5)">
    <div data-role="header">
		<h1>HAMI Quiz</h1>
	</div>
	<div data-role="navbar">
		<ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#kontakt" data-icon="star"><span id="bt_kontakt">Kontakt</span></a></li>
		</ul>
	</div>
  
  <div data-role="content">
  	<p>Quiz Seite 5 Process</p>
    	
    	<span>Q Page 5 PPPP  </span>		
					
		<!-- de-version page 5 --> 

		<div id="q5pd">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp05d"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p05_1d"> <span id="splabel_answ_p05_1d">Antw 05-1 P</span>
							<input type="radio" id="r_answ_p05_1d" name="answ_p05d" />
						</label>
						<label for="r_answ_p05_2d"> <span id="splabel_answ_p05_2d">Antw 05-2 P</span>
							<input type="radio" id="r_answ_p05_2d" name="answ_p05d" />
						</label>
						<label for="r_answ_p05_3d"> <span id="splabel_answ_p05_3d">Antw 05-3 P</span>
							<input type="radio" id="r_answ_p05_3d" name="answ_p05d" />
						</label>
						<label for="r_answ_p05_4d"> <span id="splabel_answ_p05_4d">Antw 05-4 P</span>
							<input type="radio" id="r_answ_p05_4d" name="answ_p05d" />
						</label>

				</div>
			</fieldset>
		</div> 

		<!-- en-version page 5 --> 

		<div id="q5pe">	
			<fieldset data-role="controlgroup">

				<div class="input-wrapper">
					<textarea readonly="readonly" cols="40" rows="8" name="textarea" id="questp05e"></textarea>
				</div>		
		
				<div class="input-wrapper">
						<label for="r_answ_p05_1e"> <span id="splabel_answ_p05_1e">Antw 05-1 P</span>
							<input type="radio" id="r_answ_p05_1e" name="answ_p05e" />
						</label>
						<label for="r_answ_p05_2e"> <span id="splabel_answ_p05_2e">Antw 05-2 P</span>
							<input type="radio" id="r_answ_p05_2e" name="answ_p05e" />
						</label>
						<label for="r_answ_p05_3e"> <span id="splabel_answ_p05_3e">Antw 05-3 P</span>
							<input type="radio" id="r_answ_p05_3e" name="answ_p05e" />
						</label>
						<label for="r_answ_p05_4e"> <span id="splabel_answ_p05_4e">Antw 05-4 P</span>
							<input type="radio" id="r_answ_p05_4e" name="answ_p05e" />
						</label>
				</div>
				
			</fieldset>
		</div> 		
		
    
  </div>
  
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#qz04p" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#qzsendguess" data-icon="arrow-r"><span class="bt_next">weiter</span></a></li>		  
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
  </div>
</div>		<!-- qzo5p  --> 











<!-- Process Quiz   page 1 ... 5 ends here  -->
<!-- #####################################  -->
<!-- #####################################  -->






 
 
 
 
 
 <!-- ehem. Kontaktseite == Send-Guess  140701 --> 
 <!--  Q Seite Send Guess                            -->
 
 <div data-role="page" id="qzsendguess">
		
 
        <script type="text/javascript">
		$('#qzsendguess').on('pageinit', function() {
		
					
			$('input[name=my_antw1]').val('0');
			$('input[name=my_antw2]').val('0');
			$('input[name=my_antw3]').val('0');
			$('input[name=my_antw4]').val('0');
			$('input[name=my_antw5]').val('0');


			// nur für Qz-type = F

			if ($("#my_language").val() == "D") {

				// alert($("#my_language").val());				
						
				if ($("#r_answ_f01_1d").is(":checked")) {$('input[name=my_antw1]').val('1');}
				if ($("#r_answ_f01_2d").is(":checked")) {$('input[name=my_antw1]').val('2');}
				if ($("#r_answ_f01_3d").is(":checked")) {$('input[name=my_antw1]').val('3');}
				if ($("#r_answ_f01_4d").is(":checked")) {$('input[name=my_antw1]').val('4');}
				
				if ($("#r_answ_f02_1d").is(":checked")) {$('input[name=my_antw2]').val('1');}
				if ($("#r_answ_f02_2d").is(":checked")) {$('input[name=my_antw2]').val('2');}
				if ($("#r_answ_f02_3d").is(":checked")) {$('input[name=my_antw2]').val('3');}
				if ($("#r_answ_f02_4d").is(":checked")) {$('input[name=my_antw2]').val('4');}
								
				if ($("#r_answ_f03_1d").is(":checked")) {$('input[name=my_antw3]').val('1');}
				if ($("#r_answ_f03_2d").is(":checked")) {$('input[name=my_antw3]').val('2');}
				if ($("#r_answ_f03_3d").is(":checked")) {$('input[name=my_antw3]').val('3');}
				if ($("#r_answ_f03_4d").is(":checked")) {$('input[name=my_antw3]').val('4');}				
				
				if ($("#r_answ_f04_1d").is(":checked")) {$('input[name=my_antw4]').val('1');}
				if ($("#r_answ_f04_2d").is(":checked")) {$('input[name=my_antw4]').val('2');}
				if ($("#r_answ_f04_3d").is(":checked")) {$('input[name=my_antw4]').val('3');}
				if ($("#r_answ_f04_4d").is(":checked")) {$('input[name=my_antw4]').val('4');}

				if ($("#r_answ_f05_1d").is(":checked")) {$('input[name=my_antw5]').val('1');}
				if ($("#r_answ_f05_2d").is(":checked")) {$('input[name=my_antw5]').val('2');}
				if ($("#r_answ_f05_3d").is(":checked")) {$('input[name=my_antw5]').val('3');}
				if ($("#r_answ_f05_4d").is(":checked")) {$('input[name=my_antw5]').val('4');}
				
			}	// Ende Sprache = "D"     if ($("#my_language").val() == "D") {

			
			if ($("#my_language").val() == "E") {

				// alert($("#my_language").val());				
						
				if ($("#r_answ_f01_1e").is(":checked")) {$('input[name=my_antw1]').val('1');}
				if ($("#r_answ_f01_2e").is(":checked")) {$('input[name=my_antw1]').val('2');}
				if ($("#r_answ_f01_3e").is(":checked")) {$('input[name=my_antw1]').val('3');}
				if ($("#r_answ_f01_4e").is(":checked")) {$('input[name=my_antw1]').val('4');}
				
				if ($("#r_answ_f02_1e").is(":checked")) {$('input[name=my_antw2]').val('1');}
				if ($("#r_answ_f02_2e").is(":checked")) {$('input[name=my_antw2]').val('2');}
				if ($("#r_answ_f02_3e").is(":checked")) {$('input[name=my_antw2]').val('3');}
				if ($("#r_answ_f02_4e").is(":checked")) {$('input[name=my_antw2]').val('4');}
								
				if ($("#r_answ_f03_1e").is(":checked")) {$('input[name=my_antw3]').val('1');}
				if ($("#r_answ_f03_2e").is(":checked")) {$('input[name=my_antw3]').val('2');}
				if ($("#r_answ_f03_3e").is(":checked")) {$('input[name=my_antw3]').val('3');}
				if ($("#r_answ_f03_4e").is(":checked")) {$('input[name=my_antw3]').val('4');}				
				
				if ($("#r_answ_f04_1e").is(":checked")) {$('input[name=my_antw4]').val('1');}
				if ($("#r_answ_f04_2e").is(":checked")) {$('input[name=my_antw4]').val('2');}
				if ($("#r_answ_f04_3e").is(":checked")) {$('input[name=my_antw4]').val('3');}
				if ($("#r_answ_f04_4e").is(":checked")) {$('input[name=my_antw4]').val('4');}

				if ($("#r_answ_f05_1e").is(":checked")) {$('input[name=my_antw5]').val('1');}
				if ($("#r_answ_f05_2e").is(":checked")) {$('input[name=my_antw5]').val('2');}
				if ($("#r_answ_f05_3e").is(":checked")) {$('input[name=my_antw5]').val('3');}
				if ($("#r_answ_f05_4e").is(":checked")) {$('input[name=my_antw5]').val('4');}
				
			}	// Ende Sprache = "E"     if ($("#my_language").val() == "E") {
			
			
		}); 
		</script>

 
 
    <div data-role="header">
		<h1>Aufl&ouml;sung - Kontaktseite</h1>
	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#kontakt"><span id="bt_kontakt">Kontakt</span></a></li>
		</ul>
	</div>
  
  
    	
    	<?php 
			$givenanswers = "23122";
		?>
		
		<br>
		<div id="logobild" style="width:90%; margin-left:5%;">				
				<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="mobi_8_f168-140___02_970x185.jpg" />
		</div>
		<br></br>

		
		
		<div data-role="content">
		
		
		
				<script type="text/javascript">
					$(document).ready(function(){


						$('#checkbox-store').change(function () {
							// alert("huhu hello world!");

							if ($("#checkbox-store").is(":checked")) {
								// alert("checked");
								$('.ww_submit').removeClass('ui-disabled');
								$('.ww_submit').addClass('ui-enabled');
							} else {
								$('.ww_submit').removeClass('ui-enabled');
								$('.ww_submit').addClass('ui-disabled');
							}
							  
							  
						
						});
					});

				</script>
		
		
		    <p>Quiz Seite 6 Factory Aufloesung</p>
		
		
					
		
		
            <form id="callAjaxForm">
                <div data-role="fieldcontain">
				

				
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" value=""  />
 
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" value=""  />

                    <label for="companyname">Company</label>
                    <input type="text" name="companyname" id="companyname" value=""  />

                    <label for="emailadr">Email</label>
                    <input type="text" name="emailadr" id="emailadr" value=""  />

					<p></p>
					<p> Allow us to store this data in order to send the evaluation of the quiz </p>	
					<input type="checkbox" name="checkbox-store" id="checkbox-store" class="cb_agree" />
					<label for="checkbox-store">I agree</label>

					<p> Allow us to get in touch with you for marketing purposes </p>	
					<input type="checkbox" name="checkbox-marketing" id="checkbox-marketing" class="custom" />
					<label for="checkbox-marketing">I agree</label>					
					
					
					<!-- 140714 --> 		
					<input name="my_language" id="my_language" value="D" type="text" />
					<input name="my_qtype" id="my_qtype" value="F" type="text" />
					<input name="my_antw1" id="my_antw1" value="" type="text" />
					<input name="my_antw2" id="my_antw2" value="" type="text" />
					<input name="my_antw3" id="my_antw3" value="" type="text" />
					<input name="my_antw4" id="my_antw4" value="" type="text" />
					<input name="my_antw5" id="my_antw5" value="" type="text" />
					

					
					<input type="hidden" name="answercode" value="<?php echo $givenanswers;?>" />
								
					
                    <h3 id="qznotification"></h3>
					<!--
                    <button data-theme="b" id="qzsubmit" type="submit" class="ww_submit" disabled>Submit</button>
					-->
					
					

				
				
					
                </div>
            </form>
        </div>	
		
		
		
		
    
      <div data-role="footer" data-position="fixed">
	   <div data-role="navbar">
		<ul>
		  <li><a href="#qz05f" data-icon="arrow-l"><span class="bt_prev">zur&uuml;eck</span></a></li>
		  <!--  <li id="bt_sendguess"><a href="#" class="ww_submit ui-disabled" data-icon="check"><span id="sp_bt_sendguess">absenden</span></a></li>			    -->
		  <li id="bt_sendguess"><a href="#confirm" class="ww_submit ui-disabled" data-icon="check"><span id="sp_bt_sendguess">absenden</span></a></li>
		  
		</ul>
	   </div>
	  <h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
      </div>
  
  
  
  
  </div>		<!-- qzsendguess  --> 
 
 
 
 
 
 
 
 
 

 <div data-role="page" id="confirm">
 
 	<script type="text/javascript">
		$('#confirm').on('pageinit', function() {		
	
			// $('#this_email').text("Heeeehheeee");	
					
			$('#this_email').text = $('#emailadr').text; 

		}); 
	</script>

 
 
  <div data-role="header"><h1>HAMI Quiz</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
  <div data-role="content">
  
    <div class="text-center">
    	<h1 style="text-align:center;">Best&auml;tigung</h1>
    </div>

  
  
	
		<div id="logobild" style="width:90%; margin-left:5%;">				
			<img style="display:block; width: 100%; max-width: 100%;height: auto;" id="firstimage" src="mobi_7_p2b_970x370b.jpg" />
		</div>

	<br>
	
    <div data-role="fieldcontain">
    
	<p>Danke, dass Sie unserem kleinen Quiz teilgenommen haben.</p>
	<p>Die Aufl&ouml;sung des Quiz und Ihr pers&ouml;nliches Ergebnis erfahren Sie per E-Mail, die wir an diese Adresse geschickt haben: xxxxxxxxxxxxx.</p>
	<span id="this_email">weissnet</span>
	
    </div>
  </div>
  
  
  <div data-role="footer"data-position="fixed">
	<div data-role="navbar">
		<ul>
		  <li><a href="#confirm" data-icon="arrow-l"><span class="ui-disabled bt_prev">zur&uuml;eck</span></a></li>
		  <li><a href="#confirm" data-icon="arrow-r"><span class="ui-disabled bt_next">weiter</span></a></li>
		  <!-- <li id="bt_sendguess"><a href="#" class="ww_submit ui-disabled" data-icon="check"><span id="sp_bt_sendguess">absenden</span></a></li>			    -->
		</ul>
	</div>
	<h3>HAMI - better safe than sorry</h3>
  </div>
</div>	<!-- confirm  --> 
 



 








 
 
 
 
 
<div data-role="page" id="kontakt">

   <!-- 150303 --> 


  <div data-role="header"><h1>Kontaktseite</h1></div>
  <div data-role="navbar">
    <ul>
        <li><a href="#home" data-icon="home">Home</a></li>		
		
		<div id="kont_01">
			<li><a href="#kontakt" data-icon="star" class="ui-disabled"><span id="bt_kontakt_k">Kontakt</span></a></li>
		</div>

		
		
		
    </ul>
  </div>
  <div data-role="content">
  
	<div id="kont_02d">
		<p>Bitte schicken Sie uns hier Ihre Nachricht.</p>
		<p>Wir freuen uns &uuml;ber ihre Mitteilung.</p>
	</div>
	<div id="kont_02e">
		<p>Please send us your message here.</p>
		<p>We would be pleased to receive your note.</p>
	</div>
	
    <div data-role="fieldcontain">
	
    	<form id="contactform">
		
		<div data-role="fieldcontain">
        <label for="name">Name:</label>
    	<input type="text" name="name" id="name" value=""  />
		</div>
 
		<div data-role="fieldcontain">
        <label for="email">E-Mail:</label>
    	<input type="email" name="email" id="email" value=""  />
		</div>
 
		<div data-role="fieldcontain">
		
        <!-- <label for="conmessage">Nachricht:</label>  -->
		<label for="conmessage">
			<div id="kont_03d">
				Nachricht:
			</div>	
			<div id="kont_03e">
				Message:
			</div>					
		</label>	
		
		<!--  <textarea name="conmessage" id="conmessage" placeholder="Please type your message" required="required" cols="40" rows="8" maxlength="1000" style="height:600px"></textarea> -->
		<textarea name="conmessage" id="conmessage" 	required="required" cols="40" rows="8" maxlength="1000" style="height:600px"></textarea>
		</div>
	
		<!-- das war mal so 
		<input type="submit" name="sendcontactmessage" id="sendcontactmessage" value="Send Email">
		--> 
 
		<h3 id="contactnotification"></h3>
 
 
        </form>
    </div>
  </div>
  
       <div data-role="footer" data-position="fixed">
	   <div data-role="navbar">
		<ul>
		  <li><a href="#home" data-icon="back"><span class="bt_cancel">Abbruch</span></a></li>
		  <!--  <li id="bt_sendguess"><a href="#" class="ww_submit ui-disabled" data-icon="check"><span id="sp_bt_sendguess">absenden</span></a></li>			    -->
		  <li id="bt_send_contact"><a href="#confirm_contact" class="ww_submit" data-icon="check"><span id="sp_bt_send_contact">Nachricht senden</span></a></li>
		  
		</ul>
	   </div>
	  <h3>HAMI - better safe than sorry</h3> <!-- nur Kommentar --> 
      </div>
  
  
</div>			<!-- Kontakt --> 









 
 
<!-- reset der (evtl. zuvor) eingegebenen Antworten --> 

  	<script type="text/javascript">
		$('#home').on('pageinit', function() {
				$('input:radio[name="answ_f01d"]').removeAttr('checked');
				$('input:radio[name="answ_f02d"]').removeAttr('checked');
				$('input:radio[name="answ_f03d"]').removeAttr('checked');
				$('input:radio[name="answ_f04d"]').removeAttr('checked');
				$('input:radio[name="answ_f05d"]').removeAttr('checked');
				$('input:radio[name="answ_f01e"]').removeAttr('checked');
				$('input:radio[name="answ_f02e"]').removeAttr('checked');
				$('input:radio[name="answ_f03e"]').removeAttr('checked');
				$('input:radio[name="answ_f04e"]').removeAttr('checked');
				$('input:radio[name="answ_f05e"]').removeAttr('checked');
				
				$('input:radio[name="answ_p01d"]').removeAttr('checked');
				$('input:radio[name="answ_p02d"]').removeAttr('checked');
				$('input:radio[name="answ_p03d"]').removeAttr('checked');
				$('input:radio[name="answ_p04d"]').removeAttr('checked');
				$('input:radio[name="answ_p05d"]').removeAttr('checked');
				$('input:radio[name="answ_p01e"]').removeAttr('checked');
				$('input:radio[name="answ_p02e"]').removeAttr('checked');
				$('input:radio[name="answ_p03e"]').removeAttr('checked');
				$('input:radio[name="answ_p04e"]').removeAttr('checked');
				$('input:radio[name="answ_p05e"]').removeAttr('checked');
				
				
		}); 
		
		
		
		
		
		
	</script> 
	
	<!-- wird benötigt zum trennen de- en- Sprache , eigentlich nur beim browser reload   --> 
	
	<script type="text/javascript">
		
		$(function () {
		
			// alert ("kontakt init: " + $("#my_language").val() );
		


			if ($("#my_language").val() == "D") {								
				$("#kont_02d").show();
				$("#kont_02e").hide();		
				$("#kont_03d").show();
				$("#kont_03e").hide();
			} else {			
				$("#kont_02d").hide();
				$("#kont_02e").show();		
				$("#kont_03d").hide();
				$("#kont_03e").show();
			}		
		
		}); 
	</script>
 
</body>
</html>
