<header>
    <nav>
        <?php //echo '<a href="index.php" class="col-30"><img src=' .esc_url( get_template_directory_uri()) . '/assets/img/logo.svg" alt="Página Incial"></a>' ?>
        <a href="home" class="col-30"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.svg" alt="Página Incial"></a>

        <label for="hamburger" class="col-30 right">&#9776;</label>
        <input type="checkbox" id="hamburger"/>

        <ul class="col-70">
        
            <li><a href="<?php echo get_page_link( get_page_by_path( 'cursos' ) ); ?>">Cursos</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="noticias">Notícias</a></li>
            <li><a href="eventos">Eventos</a></li>
            <li><a href="#">Biblioteca</a></li>


            <li><a href="modal/inscrevase.php" rel="modal:open" class="btn-sec">Inscreva-se</a></li>
            <li><a href="#" class="btn-pri" target="_blank">Aluno online</a></li>
        </ul>

    </nav>
</header>
