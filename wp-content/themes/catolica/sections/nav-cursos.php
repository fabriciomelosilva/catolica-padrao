<?php
$argsCategory = array(
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'parent'                   => 0,
        'hide_empty'               => 0,
        'exclude'                  => '1' 
); 

?>


<?php $categories = get_categories($argsCategory); ?>

<section>
        <h1 class="col-100 center">Temos cursos nas áreas de</h1 class="col-100">

        <?php foreach($categories as $category) : $term_id = $category->term_id; ?>
        <article class="col-50">
            <div class="areas-cartao">
                <a href="<?php echo get_page_link( get_page_by_path( 'cursos' ) ); ?>">
                    
                    <?php if ($category->slug == "graduacao") : ?>
                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icone-graduacao.png';?>" alt="icone">
                    <?php endif; ?>
                    <?php if ($category->slug == "especializacao") : ?>
                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icone-especializacao.png';?>" alt="icone">
                    <?php endif; ?>
                    <?php if ($category->slug == "mestrado") : ?>
                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icone-mestrado.png';?>" alt="icone">
                    <?php endif; ?>
                    <?php if ($category->slug == "extensao") : ?>
                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icone-extensao.png';?>" alt="icone">
                    <?php endif; ?>

                    <h4><?php echo $category->name; ?></h4>
                    <p><?php echo $category->description; ?></p>
                </a>
            </div>

            <?php $meta_image = get_wp_term_image($term_id); ?>


            <div class="bg-cartao">
                <img src="<?php echo $meta_image; ?>" alt="">
            </div>
        </article>

        <?php endforeach; ?>
</section>