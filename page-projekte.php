<?php
/*
Template Name: Greim Projekte
*/
?>
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

                    echo "<h4 id='$kategorie->slug'class='projekteindex_headline'>".$kategorie->name."</h4>";
                    echo "<ul class='projekteindex clearfix'>";
                    $counter = 0;
                        if ( $catQuery->have_posts() ) : while ( $catQuery->have_posts() ) : $catQuery->the_post();
                            $counter = $counter +1;
                            ?><li class="clearfix"><a href="<?php the_permalink()?>"><img class="grayscale" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)) ?>"></a>
                                <p><a href="<?php the_permalink()?>"><?php the_title()?></a> <br>
                                <?php echo get_field('baujahr')." | ".get_field('standort');?></p></li
                                ><?php

                        endwhile;

                        wp_reset_postdata();

                        endif;
                    echo"</ul>";
                   
                } 
            ?>    
        </div>
    </main>
<?php get_footer(); ?>
