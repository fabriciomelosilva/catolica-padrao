
<?php get_header(); ?>

<?php get_template_part('sections/nav', 'index'); ?>

<?php $post_type = get_post_type(); ?>

<?php if ($post_type == 'noticias') : ?>

<?php get_template_part('sections/nav', 'getfields'); ?>

	<main>
    <section>
		<h5 class="col-100 center">Notícias</h5>
		<?php $posts = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 2 ) ); 
		while ( $posts->have_posts() ) : $posts->the_post(); 
		$image = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' );
		$destaque[] = $post->ID;?>
			<!-- destaque com dois -->
			<article class="col-50">
				<div class="noticia-cartao">
				<figure><img src="<?php echo $image ?>" /></figure>
				<?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">'; ?>
				<?php the_title( '<h2>', '</h2>' ); ?>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quaerat inventore veniam accusamus, dolore neque ad quam voluptatibus placeat asperiores soluta cum, omnis corrupti rem ipsam iusto cumque deserunt quibusdam.</p>
						<small>15 NOV 2019</small>
						<small>Leia mais</small>
					</a>
				</div>
			</article>
			<!-- destaque com dois -->
		<?php endwhile; ?>


		<?php $list = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 12, 'post__not_in' => $destaque ) ); 
		while ( $list->have_posts() ) : $list->the_post(); 
		$image = wp_get_attachment_url( get_post_thumbnail_id($list->ID), 'thumbnail' );?>

			<article class="col-33">
					<div class="noticia-cartao">
					<figure><img src="<?php echo $image ?>" /></figure>
					<?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">'; ?>
						<?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">'; ?>
						<?php the_title( '<h2>', '</h2>' ); ?>
							<small>15 NOV 2019</small>
							<small>Leia mais</small>
						</a>
					</div>
		</article>

		<?php endwhile; ?>

	</section>

	</main>

<?php endif; ?>


<?php if ($post_type == 'eventos') : ?>
	<main>
    <section>
		<h5 class="col-100 center">Eventos</h5>
		<?php $posts_events = new WP_Query( array( 'post_type' => 'eventos', 'posts_per_page' => 2 ) ); 
		while ( $posts_events->have_posts() ) : $posts_events->the_post(); 
		$image = wp_get_attachment_url( get_post_thumbnail_id($posts_events->ID), 'thumbnail' );
		$destaque_events[] = $post->ID;?>
			<!-- destaque com dois -->
			<article class="col-50">
				<div class="noticia-cartao">
				<figure><img src="<?php echo $image ?>" /></figure>
				<?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">'; ?>
				<?php the_title( '<h2>', '</h2>' ); ?>
				<?php the_excerpt(); ?>
						<small>15 NOV 2019</small>
						<small>Leia mais</small>
					</a>
				</div>
			</article>
			<!-- destaque com dois -->
		<?php endwhile; ?>


		<?php $list_events = new WP_Query( array( 'post_type' => 'eventos', 'posts_per_page' => 12, 'post__not_in' => $destaque_events ) ); 
		while ( $list_events->have_posts() ) : $list_events->the_post(); 
		$image = wp_get_attachment_url( get_post_thumbnail_id($list_events->ID), 'thumbnail' );?>

			<article class="col-33">
					<div class="noticia-cartao">
					<figure><img src="<?php echo $image ?>" /></figure>
					<?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">'; ?>
						<?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">'; ?>
						<?php the_title( '<h2>', '</h2>' ); ?>
							<small>15 NOV 2019</small>
							<small>Leia mais</small>
						</a>
					</div>
		</article>

		<?php endwhile; ?>

	</section>
	</main>

<?php endif; ?>
<?php  get_footer(); ?>
