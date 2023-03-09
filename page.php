<?php get_header(); ?>

<main id="main">

    <div id="the-content" class="container-fluid">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container-fluid px-0">
                <?php the_content(); ?>
            </div>
            <?php endwhile; else : ?>
            <article class="alert">
                <p>Desculpe, nada encontrado!</p>
            </article>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>