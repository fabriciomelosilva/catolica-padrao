<?php // Template Name: Sobre ?>

<?php

get_template_part('sections/nav', 'getfields');

get_header();

        
get_template_part('sections/nav', 'index');

$subtitulo = get_field( "subtitulo" );
$missao = get_field( "missao" );
$visao = get_field( "visao" );
$valores = get_field( "valores" );
$imagem = get_field( "imagem" ); ?>


<main>

<section>

    <h5 class="col-100 center">Sobre</h5>

    <h1 class="col-100 center"><?php echo $subtitulo; ?></h1>

    <div class="col-100 texto">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
   
       the_content();

    endwhile; else: ?>
    
    <?php endif; ?>
   
    </div>

    <article class="col-100">

        <div class="sobre-area">

            <div class="sobre-cartao">
                <h4>Missão</h4>
                <p><?php echo $missao;  ?></p>
            </div>

            <div class="sobre-cartao">
                <h4>Visão</h4>
                <p><?php echo $visao;  ?></p>
            </div>

            <div class="sobre-cartao">
                <h4>Valores</h4>
                <p><?php echo $valores;  ?></p>
            </div>

        </div>

        <div class="bg-cartao">
            <img src="<?php echo $imagem; ?>" alt="">
        </div>

    </article>

    <h5 class="col-100 center">História</h5>

    <h1 class="col-100 center">Timeline com datas importantes</h1>



    <article class="col-100 timeline mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="x">


    <?php while(the_repeater_field('datas_importantes')): ?>
			<?php $data = get_sub_field('data'); ?>
            <?php $titulo = get_sub_field('titulo'); ?>
            <?php $texto = get_sub_field('texto'); ?>
            <?php $imagem = get_sub_field('imagem'); ?>


        <div class="timeline-bloco">

            <div class="timeline-area">

                <h1><?php echo $data; ?></h1>

                <div class="timeline-cartao">
                    <h4><?php echo $titulo; ?></h4>
                    <p><?php echo $texto; ?></p>
                </div>

            </div>

            <div class="bg-cartao">
                <img src="<?php echo $imagem; ?>" alt="">
            </div>

        </div>

    <?php endwhile; ?>

</article>

</section>

</main>

<?php get_footer(); ?>
