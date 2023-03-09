<?php

// Register a new sidebar
function add_widget_Support() {

    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Formulário WhatsApp',
        'id'            => 'form-whatsapp',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'add_Widget_Support' );

// Adiciona o suporte às imagens destacadas das postagens
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280, 720, true );

// Determina o tamanho do resumo da postagem.
add_filter('excerpt_length', function($length){
    return 20;
});