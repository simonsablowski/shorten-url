function initializeExplanationToggle() {
	$('#explanation').hide();
	$('#help').click(function(event) {
		$('#explanation').slideToggle(400);
		event.preventDefault();
	});
}

$(document).ready(function() {
	initializeExplanationToggle();
});