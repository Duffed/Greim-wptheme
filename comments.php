<div id="comments">
	<h2>
		<?php 
			$count = get_comments_number();
			if($count == 1): echo $count.' Kommentar'; endif;
			if($count > 1): echo $count.' Kommentare'; endif;
			if($count == 0): echo 'Kommentare'; endif;
		?>
	</h2>
	<?php comments_number( '<p class="no_comment">Keine Kommentare bisher :(</p>', wp_list_comments('avatar_size=50'), "" ); ?>
</div>
<div id="comment_form">
	<?php comment_form()?>
</div>