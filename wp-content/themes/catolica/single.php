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

    <section class="cursos-interna">

        <h5 class="col-100 center">Cursos</h5>

        <h1 class="col-100 center"><?php the_title(); ?></h1>

        <h5 class="col-100 center">Graduação</h5>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

        <div class="col-100 texto">

            <figure class="cursos-capa"><img src="<?php echo $image;  ?>"></figure>

        </div>

        <article class="col-60 cursos-desc">
            
		<?php echo the_content(); ?>

		<?php endwhile; ?>
			
		<?php endif; ?>
            <div class="col-25">
                <div class="col-100 cursos-dados">
				<img src="<?php echo get_template_directory_uri() .'/assets/img/icone-coordenacao.png'; ?>" alt="">
                    <h5>Coordenação</h5>
                    <p><?php echo $GLOBALS["curso_fields"]["coordenacao"]?></p>
                </div>
            </div>
            <div class="col-25">
                <div class="col-100 cursos-dados">
                    <img src="<?php echo get_template_directory_uri() .'/assets/img/icone-periodo.png'; ?>" alt="">
                    <h5>Período</h5>
                    <p><?php echo $GLOBALS["curso_fields"]["periodo"]?></p>
                </div> 
            </div>
            <div class="col-25">
                <div class="col-100 cursos-dados">
				<img src="<?php echo get_template_directory_uri() .'/assets/img/icone-duracao.png'; ?>" alt="">
                    <h5>Duração</h5>
                    <p><?php echo $GLOBALS["curso_fields"]["duracao"]?></p>
                </div>
            </div>
            <div class="col-25">
                <div class="col-100 cursos-dados">
				<img src="<?php echo get_template_directory_uri() .'/assets/img/icone-vagas.png'; ?>" alt="">
                    <h5>Vagas</h5>
                    <p><?php echo $GLOBALS["curso_fields"]["vagas"]?></p>
                </div>
            </div>

        </article>

        <article class="col-40 aside">

            <a href="#" class="btn-pri">Inscreva-se</a>
            <a href="#" class="btn-sec">Aluno online</a>

            <!--<h1>Mais cursos</h1>

            <div class="cursos-accordion">
                <button class="accordion">Ciências humanas</button>
                <div class="panel">
                    <p><a href="cursos-interna.php">Bacharelado em Filosofia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Sociologia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Antropologia</a></p>
                </div>
            </div>

            <div class="cursos-accordion">
                <button class="accordion">Ciências humanas</button>
                <div class="panel">
                    <p><a href="cursos-interna.php">Bacharelado em Filosofia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Sociologia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Antropologia</a></p>
                </div>
            </div>

            <div class="cursos-accordion">
                <button class="accordion">Ciências humanas</button>
                <div class="panel">
                    <p><a href="cursos-interna.php">Bacharelado em Filosofia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Sociologia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Antropologia</a></p>
                </div>
            </div>-->

        </article>


    </section>

    </main>


<?php get_footer(); ?>
