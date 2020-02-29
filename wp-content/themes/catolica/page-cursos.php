<?php // Template Name: Cursos ?>

<?php get_template_part('sections/nav', 'getfields'); ?>

<?php get_header(); ?>

        
<?php get_template_part('sections/nav', 'index'); ?>

<main>

<?php
    
    $argsCategory = array(
        'orderby'                  => 'id',
        'order'                    => 'ASC',
        'parent'                   => 0,
        'hide_empty'               => 0,
        'exclude'        => '1' 


    ); 
?>

<section>

<h5 class="col-100 center">Cursos</h5>


<?php 
    $categories = get_categories($argsCategory);
    foreach($categories as $category) : 
        $term_id = $category->term_id; 
        
        $sub_categories =  get_categories('child_of='.$term_id.'&hide_empty=0');
        
    ?>

<article class="col-100">

    <div class="cursos-area">

        <img src="<?php echo get_template_directory_uri() .'/assets/img/icone-graduacao.png';?>" alt="">
        
        <div class="cursos-cartao">
            <h4><?php echo  $category->name; ?></h4>

            <?php foreach($sub_categories as $category) : ?>

                <div class="cursos-accordion">
                    <button class="accordion"><?php echo  $category->name; ?></button>
                    <div class="panel">

                    <?php
                        $subcat_posts = get_posts('cat=' . $category->term_id);                     
                        foreach($subcat_posts as $subcat_post) :
                            $postID = $subcat_post->ID;
                        endforeach;
                    ?>
                        <p><a href="<?php echo get_permalink($postID); ?>"><?php echo get_the_title($postID);?> </a></p>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

        <?php
            $meta_image = get_wp_term_image($term_id); 
        ?>

    <div class="bg-cartao">
        <img src="<?php echo $meta_image; ?>" alt="">
    </div>

</article>

<?php endforeach; ?>


</section>

</main>

<?php get_footer(); ?>
