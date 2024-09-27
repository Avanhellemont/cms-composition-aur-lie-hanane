<?php
  //Suppression de l'éditeur Gutenberg
  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

//Fonction qui enregistre le menu de navigation
// Gestion des menus
function enregistre_mon_menu() {
  register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );


//Redimensionner image
add_action( 'after_setup_theme', 'ajout_nouvelle_taille' );
function ajout_nouvelle_taille() {
    add_image_size( 'taille_slide', 1500, 1250 );
<<<<<<< HEAD
}

=======
}
>>>>>>> hanane
