$(document).ready(function() {

	link=$(location).attr('href');
	elts=link.split("/");

	name=elts.pop();

	if (name.length==0) {
		name="./";
	}

	var listItems = $(".navbar-nav li a");
	listItems.each(function(idx, el) {
	    var href = $(el).attr("href");
	    if (href==name) {
	    	$(el).addClass("active");
	    }
	});
});

// $(window).scroll(function(event){
// 	$('.collapse').collapse('hide');
// });

$(document).on('click','body *',function() {
	$('.collapse').collapse('hide');
});



























