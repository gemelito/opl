$(document).on "page:load page:fetch ready", ()->
	$('.button-collapse').sideNav({
			menuWidth: 250, 
			edge: 'left', 
			closeOnClick: true,
			draggable: true
	});
	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrain_width: false,
		hover: true,
		gutter: 0,
		belowOrigin: false,
		alignment: 'right'
	});