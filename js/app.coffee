$(document).on "ready page:load", ()->
	$(".button-collapse").sideNav()
	$(".dropdown-button").dropdown()
	$('select').material_select()
	$('.datepicker').pickadate({
		selectMonths: true, # Creates a dropdown to control month
		selectYears: 15 # Creates a dropdown of 15 years to control year
	});
	#$(".tooltipped").tooltipped({deplay: 50})
	$('ul.tabs').tabs()
	$("#search").on "click", ()->
		$("#search").hide()
		$("#div-src").show(1, ()->
			$("#btn-src").show(1, ()->
				$("#input-src").show()
				$("#input-src").animate({
					width: 160+'px'
				})
			)
		)
		return false

	$('#close-src').on "click", ()->
		$('#div-src').hide(1, ()->
			$('#btn-src').hide()
			$('#input-src').width(0)
			$('#search').show()
		)


	$("#one").hide()
	$("#two").hide()
	$("#three").hide()
	$("#colaboradores").on "change", ()->
		valor = $('select[id=colaboradores]').val()
		console.log(valor)
		if valor = 1
			$("#one").show()
			console.log "Es el valor"
			$("#one").animate({
					display: 'block'
			})
		if valor = 2
			$("#one").show()
			$("#two").show()
			console.log "Es el valor"
			$("#one").animate({
					display: 'block'
			})
		if valor = 3
			$("#one").show()
			$("#two").show()
			$("#three").show()
			console.log "Es el valor"
			$("#one").animate({
					display: 'block'
			})
		
		
		