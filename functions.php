<?php
add_theme_support("post-thumbnails");
add_theme_support("woocommerce");
add_action('init',function(){
    //Register Nav Menus
    register_nav_menus( array(
        'header_menu'=>'لینک های منوی بالا',
        'sounds'=>'منوی دستگاه های صوتی',
        'videos'=>'منوی لوازم صوتی تصویری',
        'others'=>'منوی دیگر تجهیزات',
        'footer_fast'=> 'دسترسی سریع',
    ));
});
//Add Class Name for wpnavmenu
add_filter('nav_menu_link_attributes',function( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}, 1, 3 );
add_filter('nav_menu_css_class', function($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}, 1, 3);
function page_navigation_f($pages = '', $range = 2){  
    $showitems = ($range * 2)+1;  

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }   

    if(1 != $pages)
    {
       echo '<div id="pagination" class="w-full p-5 flex flex-wrap lg:flex-nowrap items-center justify-center gap-3 lg:gap-5 mt-6 mb-12 font-irsans">       ';
       if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class=\"flex items-center gap-2\"><i class=\"icon-arrow-left w-4 h-4 rotate-180\"></i><span class=\"text-sm text-gray5\">قبلی</span></a>";
       echo '<ul class="px-3 flex items-center border-l border-r border-gray2 gap-2 text-gray5 text-sm">';
       for ($i=1; $i <= $pages; $i++){
           if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
           {
               echo "<li><a href='".get_pagenum_link($i)."' class=\"flex items-center justify-center rounded-10 w-5 md:w-8 h-5 md:h-8 duration-200 hover:bg-blue1 hover:text-white\" ".($paged == $i ? 'bg-red-700' : 'bg-stone-700').">".$i."</a></li>";
           }
       }
       echo '</ul>';
        if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class=\"flex items-center gap-2\"><span class=\"text-sm text-gray3\">بعدی</span><i class=\"icon-left-arrow w-4 h-4\"></i></a>";  
        echo "</div>\n";
    }
}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'تنظیمات قالب',
        'menu_title'    => 'تنظیمات قالب',
        'menu_slug'     => 'nrenter_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'برگه ها',
        'menu_title'    => 'برگه ها',
        'menu_slug'     => 'nrenter_pages',
        'parent_slug'   => 'nrenter_settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'شبکه های اجتماعی',
        'menu_title'    => 'شبکه های اجتماعی',
        'menu_slug'     => 'nrenter_social',
        'parent_slug'   => 'nrenter_settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'اسلایدر',
        'menu_title'    => 'اسلایدر',
        'menu_slug'     => 'nrenter_slider',
        'parent_slug'   => 'nrenter_settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'دسته بندی محصولات',
        'menu_title'    => 'دسته بندی محصولات',
        'menu_slug'     => 'nrenter_cats',
        'parent_slug'   => 'nrenter_settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'ایونت ها',
        'menu_title'    => 'ایونت ها',
        'menu_slug'     => 'nrenter_events',
        'parent_slug'   => 'nrenter_settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'سوالات متداول',
        'menu_title'    => 'سوالات متداول',
        'menu_slug'     => 'nrenter_faq',
        'parent_slug'   => 'nrenter_settings',
    ));

}
?>