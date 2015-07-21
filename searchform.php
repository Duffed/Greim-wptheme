	<!-- start search form -->
<div class="search-form">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<div>
			<input type="text" id="searchtext" placeholder="Suche" value="<?php the_search_query(); ?>" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="" />
		</div>
	</form>
</div>
<!-- end search form -->