<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
if( function_exists('ot_get_option') )
   echo (ot_get_option('fabicon') != '')? '<link rel="shortcut icon" href="'.ot_get_option('fabicon').'">' : '';
?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- Start of P2B Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("//assets.zendesk.com/embeddable_framework/main.js","p2b1.zendesk.com");/*]]>*/</script>
<!-- End of P2B Zendesk Widget script -->
</head>
<body <?php body_class('landx-onepage'); ?>>
<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

<!-- =========================
     HEADER   
============================== -->
<?php
if( function_exists('ot_get_option') ){
	$logo = ot_get_option( 'main_logo' );
}else{
	$logo = THEMEURI. 'images/logo-dark.png';
}
?>
<header id="home" class="dark">
	<div id="section<?php echo get_the_ID(); ?>">
	<!-- COLOR OVER IMAGE -->
		<div class="color-overlay">	
			<?php get_template_part('header/onepage', 'nav'); ?>	
			<!-- HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->
			<div class="container">
				<div class="intro-section">
					<?php
						$form_display = get_post_meta( get_the_ID(), 'form_display', true );
						$form_position = get_post_meta( get_the_ID(), 'form_position', true );
						$container_class = ( ($form_display == 'on') && (  $form_position == 'right' ) )? 'col-md-7 col-sm-7': 'col-md-12 col-lg-12';
						$form_container_class = ( ($form_display == 'on') && (  $form_position == 'right' ) )? 'col-md-5 col-sm-5': 'col-md-6 col-md-offset-3';
						$container_class .= ' text-'.get_post_meta( get_the_ID(), 'content_alignment', true );
					?>
					<div class="row">
						
						<!-- LEFT - HEADING AND TEXTS -->
						<div class="<?php echo $container_class ?>">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
								if( has_post_thumbnail() ):
									$fullsize = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');
									$url = $fullsize[0];
									$image_position = get_post_meta( get_the_ID(), 'image_position', true );	
									$image_class = ( $image_position == 'left' )? 'pull-left' : ' pull-right';		
							?>
							<div class="row">
								<div class="col-md-6 col-lg-6 <?php echo $image_class; ?>">
									<div class="side-screenshot pull-left"><img class="featured-image" src="<?php echo $url ?>" alt="<?php the_title() ?>"></div>
								</div>	
								<div class="col-md-6">
									<div class="<?php echo $class ;?>">
										<?php the_content(); ?>
										<?php get_template_part( 'inc/jump', 'button' ); ?>	
									</div>	
								</div>																			
							</div><!--.row-->
							<?php else: ?>
								<?php the_content(); ?>
								<?php get_template_part( 'inc/jump', 'button' ); ?>	
							<?php endif; ?>	
							<?php endwhile; ?>					
						</div>				
						<!-- RIGHT - REGISTRATION FORM -->
						
						<div class="<?php echo $form_container_class ?>" style="margin-top:90px;">
							<?php // get_template_part( 'inc/subcription', 'form' ); ?>
							<div class="vertical-registration-form">
								<div class="colored-line">
								</div>
								<h3 style="margin-bottom: 20px;font-size:1.4rem;">Start her!</h3>
								<a class="btn standard-button" href="https://place2book.com/da/event_maker_signup/new" target="_blank">Opret dig som arrangør</a><br>
							</div>
						</div>
						<!-- /END - REGISTRATION FORM -->
					</div>
				</div>		
			</div>
			<!-- /END HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->
			
		</div>
	</div>
</header>
	