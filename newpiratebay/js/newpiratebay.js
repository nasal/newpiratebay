$(document).ready(function()  {

	$('#q input').focus(function(e) {
		$(this).animate({ 'width': '100%' });	
	});

	$('#q input').blur(function(e) {
		$(this).animate({ 'width': '70%' });
	});

});