<?php
/**
 * The template for displaying all single posts of news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package catolica
 */

get_template_part('sections/nav', 'getfields');

get_header();

get_template_part('sections/nav', 'index'); 
?>



<main>

<section>

<h5 class="col-100 center">Eventos</h5>

<h1 class="col-100 center"><?php the_title(); ?></h1>

<h5 class="col-100 center">15 nov 2019</h5>

<div class="col-100 texto">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

    echo '<figure class="noticia-capa"><img src="'.$image.'"></figure>';
    
    the_content();
    
    endwhile; else: ?>
    <p></p>
    <?php endif; ?>

   
</div>

<h1 class="col-100 center">Mais eventos</h1>

<?php $post_id =  get_the_ID(); ?>

<?php $events = new WP_Query( array( 'post_type' => 'eventos', 'posts_per_page' => 3, 'post__not_in' => array( $post_id ) ) ); ?>


<?php while ( $events->have_posts() ) : $events->the_post(); ?>

<?php $image = wp_get_attachment_url( get_post_thumbnail_id($events->ID), 'thumbnail' ); ?>

    <article class="col-33">
        <div class="noticia-cartao">
            <figure><img src="<?php echo $image ?>" /></figure>
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

<?php get_footer(); ?>
