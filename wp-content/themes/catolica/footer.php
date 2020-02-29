<div class="footer-1">

<section>

   <article class="col-25">
   
        <ul>
            <li>Acadêmico</li>

            <?php
                $url_avaliacao_institucional = null;
                $arquivo_avaliacao_institucional = null;

                if ($GLOBALS["academico_fields"]["url_avaliacao_institucional"]) :
                    $url_avaliacao_institucional = $GLOBALS["academico_fields"]["url_avaliacao_institucional"];
                else:
                    $arquivo_avaliacao_institucional = $GLOBALS["academico_fields"]["arquivo_avaliacao_institucional"];
                endif;
            ?>

            <li><a href="<?php echo ($url_avaliacao_institucional) ? $url_avaliacao_institucional : $arquivo_avaliacao_institucional; ?>" target="_blank">Avaliação institucional</a></li>
            
            <?php
                $url_solicitar_certificado_de_eventos = null;
                $arquivo_solicitar_certificado_de_eventos = null;

                if ($GLOBALS["academico_fields"]["url_solicitar_certificado_de_eventos"]) :
                    $url_solicitar_certificado_de_eventos = $GLOBALS["academico_fields"]["url_solicitar_certificado_de_eventos"];
                else:
                    $arquivo_solicitar_certificado_de_eventos = $GLOBALS["academico_fields"]["arquivo_solicitar_certificado_de_eventos"];
                endif;
            ?>

            <li><a href="<?php echo ($url_solicitar_certificado_de_eventos) ? $url_solicitar_certificado_de_eventos : $arquivo_solicitar_certificado_de_eventos; ?>" target="_blank">Solicitar certificado de eventos</a></li>
            <li><a href="#" target="_blank">Calendário acadêmico</a></li>
        </ul>

    </article>

    <article class="col-25">

        <ul>
            <li>Documentos</li>

            <?php

                $url_bolsas_e_financiamentos = null;
                $aquivo_bolsas_e_financiamentos = null;

                if ($GLOBALS["documentos_fields"]["url_bolsas_e_financiamentos"]) :
                    $url_bolsas_e_financiamentos = $GLOBALS["documentos_fields"]["url_bolsas_e_financiamentos"];
                else:
                    $aquivo_bolsas_e_financiamentos = $GLOBALS["documentos_fields"]["aquivo_bolsas_e_financiamentos"];
                endif;
            ?>

            <li><a href="<?php echo ($url_bolsas_e_financiamentos) ? $url_bolsas_e_financiamentos : $aquivo_bolsas_e_financiamentos; ?>" target="_blank">Bolsas e financiamentos</a></li>
            <li><a href="#" target="_blank">Manual institucional</a></li>
            <li><a href="#" target="_blank">Regulamentos institucionais</a></li>
        </ul>

    </article>

    <article class="col-25">

        <ul>
            <li>Publicações</li>
            <li><a href="#" target="_blank">Revista científica IES</a></li>
            <li><a href="#" target="_blank">Revista científica dos cursos</a></li>
            <li><a href="#" target="_blank">Acervo científico</a></li>
        </ul>

    </article>

    <article class="col-25">

        <ul>
            <li>Links úteis</li>
            <li><a href="#" target="_blank">Núcleo de Apoio Psicopedagógico</a></li>
            <li><a href="#" target="_blank">Comitê de Ética em Pesquisa com seres humanos</a></li>
            
        </ul>

    </article>

</section>

</div>

<div class="footer-2">

<section>

    <article class="col-25">

        <img src="<?php echo get_template_directory_uri() .'/assets/img/logo-2.png'; ?>" alt="Logotipo antigo">


    </article>

    <article class="col-50">

        <p>Rua Tenente Benévolo, 201 - Centro | Fortaleza, Ceará - Brasil</p>
        <a href="mailto:catolicafort@catolicadefortaleza.edu.br">catolicafort@catolicadefortaleza.edu.br</a>
        <p>(85) 3453.2150 / (85) 99690.0302</p>

    </article>

    <article class="col-25">

        <ul>
            <li>Contato
                <ul class="social">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri() .'/assets/img/icone-wpp.png'; ?>" alt=""></a> <a href="#"><img src="<?php echo get_template_directory_uri() .'/assets/img/icone-face.png'; ?>" alt=""></a></li>
                </ul>
            </li>
            <li><a href="modal/trabalhe.php" rel="modal:open">Trabalhe conosco</a></li>
            <li><a href="modal/contato.php" rel="modal:open">Fale conosco</a></li>
        </ul>

    </article>

</section>

</div>


<footer>

2019 - Faculdade Católica de Fortaleza. Todos os direitos reservados

</footer>

<?php wp_footer(); ?>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/slick.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/modal.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/funcoes.js' ?>"></script>

</body>

</html>