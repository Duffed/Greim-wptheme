<?php get_header(); 
   $featured_image = wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>
    <header style="background-image: url('<?php echo $featured_image; ?>')">
        <img class="hero-text" src="<?php echo get_template_directory_uri().'/images/logo2_trans_b.png'?>" alt="Greim Architekten" >
    </header>

    <main class="boxshadow">
        <div class="container">
            <h4 class="headline"><?php the_title()?></h4>
            <div class="row">
                <div class="column">
                    <figure class="u-full-width grayscale" style="background-image:url(<?php echo get_field('projekt_bild_1')['url'];?>); height:300px;background-size: cover; background-position: 50% 70%;">
                        
                    </figure>
                </div>
            </div>
            <div class="row">
            <?php if(get_field('projekt_bild_2') ): ?>
                <div class="six columns">
                    <figure class="u-full-width grayscale" style="background-image:url(<?php echo get_field('projekt_bild_2')['url'];?>); height:300px;background-size: cover; background-position: 50% 70%;">
                  
                    </figure>
                </div>
            <?php endif; ?>
            <?php if(get_field('projekt_bild_3') ): ?>
                <div class="six columns">
                    <figure class="u-full-width grayscale" style="background-image:url(<?php echo get_field('projekt_bild_3')['url'];?>); height:300px;background-size: cover; background-position: 50% 70%;">
                  
                    </figure>
                </div>
            <?php endif; ?>
            </div>
            <?php if(get_field('projekt_bild_4') ): ?>
                Bild 4
            <?php endif; ?>
            <?php if(get_field('projekt_bild_5') ): ?>
                Bild 5
            <?php endif; ?>
            <?php if(get_field('projekt_bild_6') ): ?>
                Bild 6
            <?php endif; ?>

            <br/>
            <b>Standort: </b><?php echo get_field('standort')?><br/>
            <b>Baujahr: </b> <?php echo get_field('baujahr') ?><br/>

            <?php if(get_field('bauherr') ):
                echo "<b>Bauherr: </b>".get_field('bauherr')."<br/>";
            endif; ?>
            <?php if(get_field('kosten') ): 
                echo "<b>Kosten: </b>".get_field('kosten')."<br/><br/>";
            endif; ?>
            <?php if(get_field('beschreibung') ):
                echo "<b>Beschreibung: </b><br/>".get_field('beschreibung')."<br/>";
            endif; ?>

        </div>
    </main>
<?php get_footer(); ?>
