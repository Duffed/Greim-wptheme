
<?php get_post_meta($post_id, '$key', $single); ?>
<?php get_header(); 
    $featured_image = wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>
    <header style="background-image: url('<?php echo $featured_image; ?>')">
        <img class="hero-text" src="<?php echo get_template_directory_uri().'/images/logo2_trans_b.png'?>" alt="Greim Architekten" >
    </header>
    
    <main class="boxshadow">
        <div class="container">

            <!-- Content -->
            <?php 
                $terms = get_terms('kategorie', 'order=DESC');
                // Schleife für jede subkategorie
                foreach($terms as $kategorie) {

                    $args = array(
                         'posts_per_page' => -1,
                         'orderby' => 'desc',
                         'post_type' => 'projekte',
                         'kategorie' => $kategorie->slug,
                         'post_status' => 'publish'
                    );
                    $catQuery = new WP_Query($args);

                    echo "<h4 class='recipeindex'>".$kategorie->name."</h4>";
                    echo "<ul>";
                        if ( $catQuery->have_posts() ) : while ( $catQuery->have_posts() ) : $catQuery->the_post();

                            ?>
                                <!-- List -->
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
                            <?php

                        endwhile;

                        wp_reset_postdata();

                        endif;
                    echo"</ul>";
                   
                } 
            ?>    
        </div>
    </main>
<?php get_footer(); ?>
