// Check for the unique id of the corresponding widget. then execute that widgets function.
$(document).ready(function () {

	$('#video_library').ready(load_video_library($('#first_name').contents())); // loads member level from meta tag dropped by php. then loads video library 


});



function load_video_library(member_level) {

	// loads playlist content from wistia
	// creates a custom tile for each playlist
	// adds them to the dom in a flexbox somewhere within #video_library	
	
}