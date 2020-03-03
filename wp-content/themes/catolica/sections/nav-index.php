<header>
    <nav>
        <?php //echo '<a href="index.php" class="col-30"><img src=' .esc_url( get_template_directory_uri()) . '/assets/img/logo.svg" alt="Página Incial"></a>' ?>
        <a href="<?php echo get_page_link( get_page_by_path( 'home' ) ); ?>" class="col-30"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.svg" alt="Página Incial"></a>

        <label for="hamburger" class="col-30 right">&#9776;</label>
        <input type="checkbox" id="hamburger"/>

        <ul class="col-70">
        
            <li><a href="<?php echo get_page_link( get_page_by_path( 'cursos' ) ); ?>">Cursos</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_path( 'sobre' ) ); ?>">Sobre</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_path( 'noticias' ) ); ?>">Notícias</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_path( 'eventos' ) ); ?>">Eventos</a></li>
            <li><a href="#">Biblioteca</a></li>
            <li><a href="#inscrevase" rel="modal:open" onclick=modelEvent(event) class="btn-sec">Inscreva-se</a></li>
            <li><a href="<?php echo $GLOBALS["fields_botoes_menu"]["aluno_online"]; ?>" class="btn-pri" target="_blank">Aluno online</a></li>
        </ul>

    </nav>
</header>
