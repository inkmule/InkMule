//chage affix class based on window width
function checkWidth(init)
{
    /*If browser resized, check width again */
    if ($(window).width() > 767) {
        $('#side-nav').addClass('affix');
    }
    else {
        if (!init) {
            $('#side-nav').removeClass('affix');
        }
    }
}

$(document).ready(function() {
	
	//dynamically hide/show the extra quote form dropdowns
	$('#input_shirt_type').change(function(){
		
		alert('changed');
	});
	
	//Toggle affix classes based on window width
	//If the browser width falls into the realm of mobile, put the nav back into the workflow at the top of the page
	checkWidth(true);
	$(window).resize(function() {
		checkWidth(false);
	});
});