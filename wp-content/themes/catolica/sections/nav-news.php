
<?php $loop = new WP_Query( array( 'post_type' => 'noticias', 'orderby' => 'post_date','posts_per_page' => 2, 'suppress_filters' => true) ); ?>

<section>

<h1 class="col-100 center">Últimas notícias</h1>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php $content = get_the_content(); ?>
<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

    <article class="col-50">
        <div class="noticia-cartao">

            <figure><img src="<?php echo $image ?>" /></figure>
            <?php echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="">'; ?>
                <?php the_title( '<h2>', '</h2>' ); 
                echo '<p>' . substr($content, 0, 219) .'</p>';?>
                <small>15 NOV 2019</small>
                <small>Leia mais</small>
            </a>
        </div>
    </article>

<?php endwhile; ?>

</section>