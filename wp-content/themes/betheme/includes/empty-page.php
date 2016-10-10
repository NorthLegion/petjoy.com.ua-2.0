<?php
/**
	Template Name: Empty page

*/
?>
<html>
<head>
<title><?php wp_title("",true); ?></title>
<?php wp_head(); ?>

</head>

<body>
<?php while (have_posts()) : the_post(); ?>
<div id="page-content">
	<?php the_content(); endwhile; ?>
</div>
	
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
