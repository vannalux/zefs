<?php
if ( ! function_exists( 'adobe_muse_setup' ) ) :

function adobe_muse_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'adobe_muse', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'adobe_muse' ),
        'social'  => __( 'Social Links Menu', 'adobe_muse' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // adobe_muse_setup

add_action( 'after_setup_theme', 'adobe_muse_setup' );


if ( ! function_exists( 'adobe_muse_init' ) ) :

function adobe_muse_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // adobe_muse_setup

add_action( 'init', 'adobe_muse_init' );


if ( ! function_exists( 'adobe_muse_custom_image_sizes_names' ) ) :

function adobe_muse_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'adobe_muse_custom_image_sizes_names' );
endif;// adobe_muse_custom_image_sizes_names



if ( ! function_exists( 'adobe_muse_widgets_init' ) ) :

function adobe_muse_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'adobe_muse_widgets_init' );
endif;// adobe_muse_widgets_init



if ( ! function_exists( 'adobe_muse_customize_register' ) ) :

function adobe_muse_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'adobe_muse_customize_register' );
endif;// adobe_muse_customize_register


if ( ! function_exists( 'adobe_muse_enqueue_scripts' ) ) :
    function adobe_muse_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '1.0.2', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '// Update the \'nojs\'/\'js\' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, \'js\');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.museresponsive.js", "require.js", "index.css"], "outOfDate":[]};');

    wp_register_script( 'inline-script-2', '', [], '1.0.2', true );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '// Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = false');

    wp_register_script( 'inline-script-3', '', [], '1.0.2', true );
    wp_enqueue_script( 'inline-script-3' );
    wp_add_inline_script( 'inline-script-3', 'window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):alert(g)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch","jquery.musepolyfill.bgsize","jquery.scrolleffects","jquery.museresponsive"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
(function(){
	try{

          $(\'.button55\').click(function(){
            $(\'body\').animate({\'scrollTop\': 0}, 1000);
            $(\'html\').animate({\'scrollTop\': 0}, 1000);
            });
            $(window).scroll(function(){
              if($(window).scrollTop() > 200){
                $(\'.button55\').addClass(\'active\');    
              }
              else{
                $(\'.button55\').removeClass(\'active\');
              }
            });
      
	}
	catch(e)
	{
		Muse.Assert.fail(\'Error with Widget:Scroll to Top ParamHTMLOnDocReady Handler \' + e.toString());
	}
})();/* Widget:Scroll to Top */
Muse.Utils.resizeHeight(\'.browser_width\');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $(\'body\').addClass(\'initialized\'); });/* mark body as initialized */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.fullPage(\'#page\');/* 100% height page */
$(\'#bp_768\').one(\'muse_this_bp_activate\', function(){
$(\'#u126\').registerBackgroundPositionScrollEffect([{"in":[-Infinity,131],"speed":[0,0.7]},{"in":[131,Infinity],"speed":[0,0.7]}], $(this)); /* scroll effect */
});/* scroll effects for one breakpoint */
$(\'#bp_infinity\').one(\'muse_this_bp_activate\', function(){
$(\'#u126\').registerBackgroundPositionScrollEffect([{"in":[-Infinity,100],"speed":[0,0.7]},{"in":[100,Infinity],"speed":[0,0.7]}], $(this)); /* scroll effect */
});/* scroll effects for one breakpoint */
$(\'#bp_1250\').one(\'muse_this_bp_activate\', function(){
$(\'#u126\').registerBackgroundPositionScrollEffect([{"in":[-Infinity,130],"speed":[0,0.7]},{"in":[130,Infinity],"speed":[0,0.7]}], $(this)); /* scroll effect */
});/* scroll effects for one breakpoint */
$( \'.breakpoint\' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};');

    wp_deregister_script( 'adobe_muse-require' );
    wp_enqueue_script( 'adobe_muse-require', get_template_directory_uri() . '/scripts/require.js?crc=7928878', [], '1.0.2', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'adobe_muse-site_global' );
    wp_enqueue_style( 'adobe_muse-site_global', get_template_directory_uri() . '/css/site_global.css?crc=314571582', [], '1.0.2', 'all');

    wp_deregister_style( 'adobe_muse-master_______a' );
    wp_enqueue_style( 'adobe_muse-master_______a', get_template_directory_uri() . '/css/master_______-a.css?crc=4084118096', [], '1.0.2', 'all');

    wp_deregister_style( 'adobe_muse-index' );
    wp_enqueue_style( 'adobe_muse-index', get_template_directory_uri() . '/css/index.css?crc=3770484610', [], '1.0.2', 'all');

    wp_deregister_style( 'adobe_muse-style' );
    wp_enqueue_style( 'adobe_muse-style', get_bloginfo('stylesheet_url'), [], '1.0.2', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'adobe_muse_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }

    /* Pinegrow generated Include Resources End */
?>