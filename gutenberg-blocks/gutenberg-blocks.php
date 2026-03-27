<?php

add_filter( 'block_categories', 'add_gutenberg_custom_block_categories' );
function add_gutenberg_custom_block_categories( $categories ) {
    $block_slug = 'neutech_columbus_blocks';
    $block_title = 'NeutechColumbus';
    $category_slugs =wp_list_pluck( $categories, 'slug' );
    if(!in_array($block_slug, $category_slugs)){
        $categories = array_merge([
            [
                'slug'  => $block_slug,
                'title' => $block_title,
                'icon'  => null,
            ]
        ], $categories);
    }
    return $categories;
}

function gutenberg_custom_blocks_callback( $block ) {
    $dir = get_theme_file_path('/gutenberg-blocks/acf-blocks/');
    $slug = str_replace('acf/', '', $block['name']);
    $file_name_clear = $slug.'.php';
    if(get_post_type()){
        $file_name_by_post_type = $slug.'-'.(get_post_type()).'.php';
        if(file_exists($dir.$file_name_by_post_type)){
            include $dir.$file_name_by_post_type;
            return;
        }
    }

    if( file_exists( $dir.$file_name_clear ) ) {
        include $dir.$file_name_clear ;
        return;
    }
}

add_action('acf/init', 'acf_init_add_gutenberg_blocks');
function acf_init_add_gutenberg_blocks() {

    //icon table-row-before

    acf_register_block(array(
        'name'				=> 'neutech-columbus-homepage-main-screen',
        'title'				=> 'Homepage main screen',
        'description'		=> '',
        'render_callback'	=> 'gutenberg_custom_blocks_callback',
        'category'			=> 'neutech_columbus_custom_blocks',
        'icon'				=> 'table-row-before',
        'keywords'			=> [],
    ));

}