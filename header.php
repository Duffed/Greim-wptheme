<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '', true, 'right' ); ?></title>


	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
	
	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/normalize.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/skeleton.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/stylesheet.css'; ?>">

	<!-- JS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script src="<?php echo get_template_directory_uri().'/js/jquery-2.0.2.min.js'?>"></script> 	<!-- 1 -->
	<script src="<?php echo get_template_directory_uri().'/js/jquery.waypoints.min.js'?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/detectmobilebrowser.js'?>"></script>

	<?php wp_head(); ?>
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

			// KOntakt
			//Onclick Kontaktformular
			$("#intro_kontaktformular").click(function() {
				$("#kontaktformular").stop().slideToggle();
				$("#intro_kontaktformular i").toggleClass("fa-chevron-down");
				$("#intro_kontaktformular i").toggleClass("fa-chevron-up");
			})

			$(".link_kontakt").addClass("active");
		});
	</script>

</head>
<body>
    <!-- Slidebar -->
    <nav id="mobile-menu" class="boxshadow onlymobile">
        <ul>
            <li id="close-x"><a class="fa fa-times"></a></li>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </ul>
    </nav>

    <nav id="navigation">
        <section class="onlymobile menu-bar">
            <a class="fa fa-bars"></a>
            <a href="index.php"><img src="<?php echo get_template_directory_uri().'/images/greim.png'?>" class="logo" alt="Greim"></a>
        </section>
        
        <section class="container">
            <ul class="menu notmobile">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </ul>
            <a href="index.php"><img src="<?php echo get_template_directory_uri().'/images/greim.png'?>" class="logo" alt="Greim"></a>
        </section>
    </nav>