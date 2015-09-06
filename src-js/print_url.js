$(document).ready(function()
{
	$('#btn').click(function()
	{	
		$.ajax({
			url: 'insert_url.php',
			
			data: 
			{
				url: $('#url').val()
			},
			
			success: function(data)
			{
				$('#res_short_url').html('<a href='+data+'>'+data+'</a> <p id="msg"> created successfully! </p>');
			},
			
			error: function()
			{
				alert('(jquery-ajax) -> Something went wrong');
			},
			
			type: 'POST'
		});
		
		$('#res_short_url').css({display: 'block'});
	});
});