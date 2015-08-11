<?php get_header(); 
   $featured_image = wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>
    <header style="background-image: url('<?php echo $featured_image; ?>')">
        <img class="hero-text" src="<?php echo get_template_directory_uri().'/images/logo2_trans_b.png'?>" alt="Greim Architekten" >
    </header>

    <main class="boxshadow">
        <div class="container">

            <h4 class="headline"><?php the_title()?></h4>
            <?php the_content()?>
        </div>
    </main>
<?php get_footer(); ?>
