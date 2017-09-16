<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper" id="top-bar">

	<div class="container clearfix">

		<div id="header-social">
			<?php if(get_theme_mod('facebook_url') and get_theme_mod('facebook_url')!="") { ?>
			<a class="social-icon facebooklink" title="Facebook" href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="el-icon-facebook"></i></a>
			<?php } ?>
			<?php if(get_theme_mod('twitter_url') and get_theme_mod('twitter_url')!="") { ?>
			<a class="social-icon twitterlink" title="Twitter"  href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="el-icon-twitter"></i></a>
			<?php } ?>
			<?php if(get_theme_mod('gplus_url') and get_theme_mod('gplus_url')!="") { ?>
			<a class="social-icon gpluslink" title="Google Plus"  href="<?php echo esc_url(get_theme_mod('gplus_url')); ?>"><i class="el-icon-googleplus"></i></a>
			<?php } ?>
			<?php if(get_theme_mod('linkedin_url') and get_theme_mod('linkedin_url')!="") { ?>
			<a class="social-icon linkedinlink" title="LinkedIn"  href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>"><i class="el-icon-linkedin"></i></a>
			<?php } ?>
			<?php if(get_theme_mod('pinterest_url') and get_theme_mod('pinterest_url')!="") { ?>
			<a class="social-icon pinterestlink" title="Pinterest"  href="<?php echo esc_url(get_theme_mod('pinterest_url')); ?>"><i class="el-icon-pinterest"></i></a>
			<?php } ?>
			<?php if(get_theme_mod('youtube_url') and get_theme_mod('youtube_url')!="") { ?>
			<a class="social-icon youtubelink" title="Youtube"  href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"><i class="el-icon-youtube"></i></a>
			<?php } ?>
			<?php if(get_theme_mod('rss_url') and get_theme_mod('rss_url')!="") { ?>
			<a class="social-icon rsslink" title="RSS"  href="<?php echo esc_url(get_theme_mod('rss_url')); ?>"><i class="el-icon-rss"></i></a>
			<?php } ?>
		</div>
	</div>  

</div>

<div class="wrapper">  

	<div id="header" class="background-cover">
		<div class="container clearfix">
			<div class="row">
			<?php get_template_part( 'content/custom', 'header' ); ?>
			<?php get_template_part( 'content/primary', 'menu' ); ?>
			</div>
		</div>
	</div>