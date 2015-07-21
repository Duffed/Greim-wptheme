<?php get_header(); ?>
			<!-- Content -->
				<!-- Left (Blog entrys)-->
				<div class="wrapper2">
				<div class="left-container">
					<h2 class="first_headline">Kategorie: <span class="hightlight"><?php single_cat_title( '', true ); ?></span></h2>
					
					<?php if (have_posts()) : ?>
						<ul id="searchresults_list" class="clearfix">
						<?php while(have_posts()): the_post()?>
<!-- unfertig -->
			                        <li class="clearfix">
			                        	<span class="thumbnail">
				                        	<!-- Thumbnail -->
				                        	
											<?php 
												// check if the post has a Post Thumbnail assigned to it.
												if ( has_post_thumbnail() ) { ?>
												<a href="<?php the_permalink()?>">
													<?php the_post_thumbnail(); ?>
												</a>
												<?php } 
											?>
										</span>
										<span class="smallcontent">
											<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
											<p><?php echo excerpt(45);?></p>
										</span>
			                        </li>
			                <?php endwhile;?>
		                </ul>
	                
	
	       			<?php else :?>
                    
                    	<p>Leider wurde nichts gefunden.</p>
                    <?php endif; ?>
                    


                    <!-- Next/Previous Button -->
					<?php if( $wp_query->max_num_pages > 1 ) :
						?>
						<div id="navigation" class="clearfix">
							<?php next_posts_link( __( '<div class="previous">&Auml;ltere Beitr&auml;ge</div>' ), $wp_query->max_num_pages ); ?>
							<?php previous_posts_link( __( '<div class="next">Neuere Beitr&auml;ge</div>'  ), $wp_query->max_num_pages ); ?>
						</div><!-- end of .navigation -->
					<?php
					endif; ?>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>