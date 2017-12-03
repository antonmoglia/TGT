<?php
function create_post_type() {
  register_post_type( 'speaker',
    array(
      'labels' => array(
        'name' => __( 'Speakers' ),
        'singular_name'       => __( 'Speaker' ),
        'menu_name'           => __( 'Speakers'),
		    'all_items'           => __( 'Tous les speakers'),
		    'view_item'           => __( 'Voir les speakers'),
		    'add_new_item'        => __( 'Ajouter un nouveau speaker'),
		    'add_new'             => __( 'Ajouter'),
		      'edit_item'           => __( 'Editer le profil du speaker'),
		'update_item'         => __( 'Modifier le speaker '),
		'search_items'        => __( 'Rechercher un speaker'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
      ),
      'taxonomies' => array( 'type', 'tag'),
      'public' => true,
      'has_archive' => true,
       'supports'  => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'comments' ),
    )

  );

    	flush_rewrite_rules();


}

add_action( 'init', 'create_post_type' );
register_taxonomy(
  'type',
  'speaker',
  array(
    'label' => 'Types',
    'labels' => array(
    'name' => 'Types',
    'singular_name' => 'Type',
    'all_items' => 'Tous les types',
    'edit_item' => 'Éditer le type',
    'view_item' => 'Voir le type',
    'update_item' => 'Mettre à jour le type',
    'add_new_item' => 'Ajouter un type',
    'new_item_name' => 'Nouveau type',
    'search_items' => 'Rechercher parmi les types',
    'popular_items' => 'Types les plus utilisés'
  ),
  'hierarchical' => true
  )
);
register_taxonomy_for_object_type( 'type', 'speaker' );

?>
