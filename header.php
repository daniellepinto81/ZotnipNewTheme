<?php /** * The Header for our theme. * * Displays all of the <head> section and everything up till <div id="main"> * * @package WordPress * @subpackage Twenty_Ten * @since Twenty Ten 1.0 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
            <?php /* We add some JavaScript to pages with the comment form	 * to support sites with threaded comments (when in use).	 */ if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); /* Always have wp_head() just before the closing </head>	 * tag of your theme, or you will break many plugins, which	 * generally use this hook to add elements to <head> such	 * as styles, scripts, and meta tags.	 */ wp_head(); ?>
        <script type="text/javascript" src="//use.typekit.net/apa2fui.js"></script>
            <script type="text/javascript">try {
        Typekit.load();
    } catch (e) {
    }</script> 
        <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    </head>
    <body <?php body_class(); ?>>
     

        <div id="wrapper" class="hfeed">	
            <div id="header">
                <div id="masthead">
                    <div class="extlinks" style="width: 960px;text-align: center;margin-bottom: 16px;">Looking for other Zotnip web services? <a href="http://zotnipwebservices.com">Click here!</a></div>
                    <div id="branding" role="banner">
			<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" /></a>	
                    </div><!-- #branding -->			
                    <div id="access" role="navigation">
                         <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>  
<!--                       <div class="tagline">
			</div>-->
                    </div><!-- #access -->
                </div><!-- #masthead -->
            </div><!-- #header -->	
            <div id="main">