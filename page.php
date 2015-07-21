<?php get_header(); ?>
			<!-- Content -->
				<!-- Left (Blog entrys)-->
                <div class="wrapper2">
				<div class="left-container">
                    <?php while(have_posts()): the_post()?>
                        <article class="content pageborder">
                            <!-- <h2><?php the_title()?></h2> -->
                            <date><?php get_the_date() ?></date>
                            <div class="actual_content">
                                <?php the_content()?>
                            </div>
                        </article>
                    <?php endwhile;?>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>