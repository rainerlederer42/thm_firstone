	$(document).ready(function()
	{
	$('#acsearch').keyup(function()
	    {
        if($(this).val().length >= 1)
        {
            $.get("acsearch.php", {search: $(this).val()}, function(data)
            {
                $("#acresults").html(data);
	            });
	        }
	    });
	});
