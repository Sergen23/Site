$(document).ready(function() {
	$('.nav__burger').click(function(event) {
		$('.nav__burger,.nav__list,.nav__list-bottom,.header').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
