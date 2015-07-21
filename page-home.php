<?php
/*
Template Name: Greim Home
*/
?>
<?php get_header(); ?>
    <header class="header-index">
        <img class="hero-text" src="<?php echo get_template_directory_uri().'/images/logo2_trans_b.png'?>" alt="Greim Architekten" >
    </header>

    <main class="boxshadow">
        <div class="container">

            <h4 class="headline">Projekte</h4>

            <section class="row">
                <article class="six columns">
                    <div class="project-image-container ">
                        <figure class="projectx grayscale project1">
                            <figcaption >Text der im Bild steht</figcaption >
                        </figure>
                    </div>
                    <p>Beispieltext &uuml;ber Projekt 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, est possimus ex ipsum dolore minus id molestiae nisi, a quod deleniti in repudiandae, nihil, totam unde ipsa facere odio iusto.</p>
                </article>
                <article class="six columns">
                    <div class="project-image-container">
                        <figure class="projectx grayscale project2">
                            <figcaption>Text der im Bild steht</figcaption >
                        </figure>
                    </div>
                    <p>Beispieltext &uuml;ber Projekt 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio, totam nobis recusandae labore tempore reprehenderit, at quisquam nemo sed iure ducimus iusto magnam eaque, dolorem aspernatur minima esse odio.</p>
                </article>
            </section>

            <section class="row">
                <article class="six columns">
                    <div class="project-image-container ">
                        <figure class="projectx grayscale project3">
                            <figcaption >Text der im Bild steht</figcaption >
                        </figure>
                    </div>
                    <p>Beispieltext &uuml;ber Projekt 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio, totam nobis recusandae labore tempore reprehenderit, at quisquam nemo sed iure ducimus iusto magnam eaque, dolorem aspernatur minima esse odio.</p>
                </article>
                <article class="six columns">
                    <div class="project-image-container ">
                        <figure class="projectx grayscale project4">
                            <figcaption >Text der im Bild steht</figcaption>
                        </figure>
                    </div>
                    <p>Beispieltext &uuml;ber Projekt 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, est possimus ex ipsum dolore minus id molestiae nisi, a quod deleniti in repudiandae, nihil, totam unde ipsa facere odio iusto.</p>
                </article>
            </section>
            <aside class="more-button">
                <a href="<?php echo home_url().'/projekte'?>">MEHR</a>
            </aside>
            
        </div>

        <header class="hero" id="kontakt-hero">
            <h2>Kontakt</h2>
        </header>

        <article class="container">
            <h4 class="headline">Greim Architekten</h4>
            <section class="row">
                <div class="six columns">
                    <p>W&ouml;lfelstra&szlig;e 6 <br>
                    95444 Bayreuth</p>
                </div>
                <div class="six columns">
                    <p><b>Fon:</b> +49 921 76441-0 <br>
                    <b>Fax:</b> +49 921 76441-29 <br>
                    <b>Email:</b> info@greim-architekten.de</p>
                </div>
            </section>

            <aside class="more-button">
                <a class="more-button" href="<?php echo home_url().'/kontakt'?>">MEHR</a>
            </aside>
        </article>
        
        <header class="hero" id="team-hero">
            <h2>Team</h2>
        </header>

        <article class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolore quod, incidunt impedit aliquam, eaque deserunt, beatae quos vitae, nobis cum sint qui rem optio quam porro accusamus nihil quo! <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repudiandae error culpa, cum adipisci tempore soluta. Minus molestias dicta neque, doloribus nemo pariatur earum nobis suscipit, molestiae praesentium ex, voluptate!<br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odit aperiam alias fugiat tempora id, consectetur atque repudiandae laborum culpa. Soluta iusto ratione, veniam sit. Eaque dolor, inventore nostrum consectetur.</p>
            <aside class="more-button">
                <a class="more-button" href="<?php echo home_url().'/team'?>">MEHR</a>
            </aside>
        </article>
    </main>
<?php get_footer(); ?>
