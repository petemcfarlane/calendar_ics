$(document).ready(function(){
	
	// show password prompt box when clicking calendar link
	$('.calendar_link').click(function() {
		userPassword = prompt("Please re-enter your password");
		if (userPassword) {
			$.post(OC.filePath('calendar_ics', 'ajax', 'return_link.php'), "name=" + oc_current_user + "&password=" + userPassword + "&calendar=" + $(this).attr('data-calendar_uri'), function(data) {
				console.log(data);
				prompt("Copy the following .ics link:", data.link);
			}, "json");
		}
	});
	
});