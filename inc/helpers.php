<?php

if (file_exists(get_template_directory() . '/vendor/autoload.php'))
    include_once(get_template_directory() . '/vendor/autoload.php');


/*
$args = array(
    'item_wrap' => 'li',
    'item_class' => '',
    'item_current_item_class' => '',
    'link_class' => '',
    'link_current_class' => ''
);
*/
if(file_exists(get_template_directory() . '/inc/extended-walker-nav-menu.php'))
    include_once(get_template_directory() . '/inc/extended-walker-nav-menu.php');

/*
<?php foreach (pll_the_languages(['raw' => '1']) as $lang) : ?>
    <a class="<?= $lang['current_lang'] ? ' current' : '' ?>" href="<?= $lang['url'] ?>"><?= strtoupper($lang['slug']) ?></a>
<?php endforeach; ?>
*/
if(file_exists(get_template_directory() . '/inc/pll-strings.php'))
    include_once(get_template_directory() . '/inc/pll-strings.php');




/**
 * Check current user for administrator rights
 * @return bool
 */
function is_administrator(){
    if(is_user_logged_in() || current_user_can('administrator')){
        return true;
    }
    return false;
}

/**
 * Debugger
 * @param array $array
 */
if(!function_exists('is_dev')){
    function is_dev(){
        $http_host = $_SERVER['HTTP_HOST'] ?? '';
        if(mb_strpos($http_host, '.local')){
            return true;
        }

        $allowed = [
            '9ddfb4a4967bf22f49d31413cb970454',
        ];
        return in_array(md5($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0'), $allowed);
    }
}

if(!function_exists('print_array')) {
    function print_array($data = []){
        printf('<pre>%s</pre>', print_r($data, true));
    }
}
if(!function_exists('print_array_die')) {
    function print_array_die($data = []){
        print_array($data);
        die();
    }
}
if(!function_exists('print_array_sdts')) {
    function print_array_sdts($data = []){
        if (isset($_GET['sdts']) && $_GET['sdts'] == 'true') {
            print_array($data);
        }
    }
}
if(!function_exists('print_array_sdts_die')) {
    function print_array_sdts_die($data = []){
        if (isset($_GET['sdts']) && $_GET['sdts'] == 'true') {
            print_array_die($data);
        }
    }
}
if(!function_exists('print_array_dev')) {
    function print_array_dev($data = []){
        if (is_dev()) {
            print_array($data);
        }
    }
}
if(!function_exists('print_array_dev_die')) {
    function print_array_dev_die($data = []){
        if (is_dev()) {
            print_array_die($data);
        }
    }
}
if(!function_exists('dd')){
    function dd($data = []){
        print_array_die($data);
    }
}
if(!function_exists('dd_dev')){
    function dd_dev($data = []){
        if(is_dev()) dd($data);
    }
}

if(!function_exists('vd')){
    function vd($data = null){
        ob_start();
        var_dump($data);
        $vd = ob_get_clean();
        printf('<pre>%s</pre>', $vd);
    }
}
if(!function_exists('vd_die')){
    function vd_die($data = null){
        vd($data);
        die();
    }
}
if(!function_exists('vd_dev')){
    function vd_dev($data = null){
        if(is_dev()){
            vd($data);
        }
    }
}
if(!function_exists('vd_dev_die')){
    function vd_dev_die($data = null){
        if(is_dev()){
            vd_die($data);
        }
    }
}

/**
 * @param $template_name
 * @param null $part_name
 * @return string
 */
function load_template_part($template_name, $part_name = null, $args = []) {
    ob_start();
    get_template_part($template_name, $part_name, $args);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}



/**
 * Get menu name by theme location
 * @param $theme_location
 * @return string
 */
function get_menu_name($theme_location){
    $theme_locations = get_nav_menu_locations();

    $menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );

    return $menu_obj->name;
}


/**
 * Get menu raw items
 * @param $location
 * @param bool $set_children
 * @return array|false
 */
function get_menu_items($location, $set_children = false){
    $locations = get_nav_menu_locations();
    if(isset($locations[$location])){
        $menu_items = wp_get_nav_menu_items($locations[$location]);
        if(!$set_children) return $menu_items;

        $menu_with_children = [];
        foreach ($menu_items AS $item){
            $item->children = set_menu_item_children($item, $menu_items);
            if(!$item->menu_item_parent) $menu_with_children[] = $item;
        }
        return $menu_with_children;
    }

    return [];
}

/**
 * Set menu children items (recursive)
 * @param $item
 * @param $menu_items
 * @return array
 */
function set_menu_item_children($item, $menu_items){
    $items = array_filter($menu_items, function($v)use($item){
        return $v->menu_item_parent == $item->db_id;
    });
    if($items){
        foreach($items AS $subitem){
            $subitem->children = set_menu_item_children($subitem, $menu_items);
        }
    }
    return $items;
}

function get_privacy_page(){
    return get_post((int)get_option('wp_page_for_privacy_policy', 0));
}

function content_prepare($content = ''){
    global $post;
    if(!$content && $post && $post->post_content)
        $content = $post->post_content;

    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]&gt;', $content );

    return $content;
}

function get_logo_uri(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0] ?? '';
}

function get_footer_logo_uri() {
    $logo_id = get_theme_mod( 'footer_logo' );
    return $logo_id ? wp_get_attachment_url( $logo_id ) : '';
}


if(!function_exists('trim_text')){
    function trim_text($text, $length = 100, $end = '...'){
        if(mb_strlen($text) <= $length) return $text;
        return rtrim(mb_substr($text, 0, $length)) . $end;
    }
}