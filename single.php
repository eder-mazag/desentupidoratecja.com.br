<?php get_header(); ?>

<main id="main">

    <div class="container my-5">
        <div class="row">

            <div class="col-md-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <header>
                        <h2 class="mb-4"><?php the_title(); ?></h2>
                        <div class="card mb-4 bg-light">
                            <img src="<?php the_post_thumbnail_url() ?>" width="100%" class="border-0 rounded" alt="..." loading="lazy">
                        </div>
                    </header>
                    <?php the_content(); ?>
                </article>
                <?php endwhile; else : ?>
                <article>
                    <p>Desculpe, nada encontrado!</p>
                </article>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>