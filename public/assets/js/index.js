$(document).ready(() => {
	$(window).on("hashchange", function () {
		$(".navbar-nav .nav-link").removeClass("active");
		$('.navbar-nav .nav-link[href="' + window.location.hash + '"]').addClass(
			"active"
		);
	});
});
