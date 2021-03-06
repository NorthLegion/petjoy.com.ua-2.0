<?php
/**
 * Template Name: Blank Page
 *
 * @package Betheme
 * @author Muffin Group
 */
?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<!-- head -->
<head>

<!-- meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if( mfn_opts_get('responsive') ) echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">'; ?>

<?php do_action('wp_seo'); ?>

<link rel="shortcut icon" href="<?php mfn_opts_show('favicon-img',THEME_URI .'/images/favicon.ico'); ?>" type="image/x-icon" />	

<!-- wp_head() -->
<?php wp_head(); ?>
</head>

<!-- body -->
<body <?php body_class( 'template-blank' ); ?>>

	<?php do_action( 'mfn_hook_top' ); ?>
	
	<?php do_action( 'mfn_hook_content_before' ); ?>

	<!-- #Content -->
	<div id="Content">
		<div class="content_wrapper clearfix">
	
			<!-- .sections_group -->
			<div class="sections_group">
				<?php 
					while ( have_posts() ){
						the_post();							// Post Loop	
						mfn_builder_print( get_the_ID() );	// Content Builder & WordPress Editor Content
					}
				?>
			</div>
			
			<!-- .four-columns - sidebar -->
			<?php get_sidebar(); ?>
	
		</div>
	</div>
	
	<?php do_action( 'mfn_hook_content_after' ); ?>
	
	<?php do_action( 'mfn_hook_bottom' ); ?>

<script type="text/javascript">


	jQuery(document).ready(function(){
	  jQuery("#ouritems").on('click','a', function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = jQuery(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = jQuery(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		jQuery('body,html').animate({scrollTop: top}, 2000);
		});
	});

</script>
<!-- wp_footer() -->
<?php get_footer();

