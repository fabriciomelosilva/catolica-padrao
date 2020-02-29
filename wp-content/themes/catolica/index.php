<?php // Template Name: Faculdade Católica ?>

<?php get_template_part('sections/nav', 'getfields'); ?>

<?php get_header(); ?>
<?php get_template_part('sections/nav', 'index'); ?>

	<div class="banner-home">
		<?php while(the_repeater_field('galeria-home')): ?>
		<?php $image = get_sub_field('img'); ?>
			<div><img src="<?php echo $image; ?>"> </div>
		<?php endwhile; ?>
	</div>

<?php 
	get_template_part('sections/nav', 'news'); 
	get_template_part('sections/nav', 'events'); 
	get_template_part('sections/nav', 'conheca'); 
?>

<?php get_footer(); ?>

