<div class="card py-4 bg-light border-0">
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    <div class="container">
        <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
<?php endif; ?>
</div>