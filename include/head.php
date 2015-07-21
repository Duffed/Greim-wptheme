<!doctype html>
<html>
	<head>		
		<!-- Basic Page Needs
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="utf-8">
		<title>Greim Architekten</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<LINK REL="SHORTCUT ICON" HREF="favicon.png">

		<!-- Mobile Specific Metas
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- FONT
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
		
		<!-- CSS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- JS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="js/jquery-2.0.2.min.js"></script> 	<!-- 1 -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/detectmobilebrowser.js"></script>

		<script>
			$( document ).ready(function() {

				//Waypoint Nav
				var waypoints = $('main').waypoint({
					handler: function() {
						$("nav").toggleClass("nav_waypoint");
						$("#scrolltotop").fadeToggle();
					},
					offset: "60px"
				})

				$("#scrolltotop").click(function() {
					$("html, body").animate({ scrollTop: 0 }, "fast");
					return false;
				})

				//Mobile Menu open-close
				function closemenu() {
					$("#mobile-menu").removeClass("menu-open");
				}
				$("a.fa-bars").click(function(e) {
					e.stopPropagation();
					if ($("#mobile-menu").hasClass("menu-open")){
						closemenu();
					} else {
						$("#mobile-menu").addClass("menu-open");
					}
				})
				$("#close-x a").click(function() {
					closemenu();
				})
				$("#mobile-menu").click(function() {
					closemenu();
				})
				$(document.body).click(function(e){
					closemenu();
				})

			});
		</script>


