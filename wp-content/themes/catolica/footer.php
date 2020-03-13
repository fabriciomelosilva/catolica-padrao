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
            
            
            <?php
                $url_calendario_academico = null;
                $arquivo_calendario_academico = null;

                if ($GLOBALS["academico_fields"]["url_calendario_academico"]) :
                    $url_calendario_academico = $GLOBALS["academico_fields"]["url_calendario_academico"];
                else:
                    $arquivo_calendario_academico = $GLOBALS["academico_fields"]["arquivo_calendario_academico"];
                endif;
            ?>
            
            <li><a href="<?php echo ($url_calendario_academico) ? $url_calendario_academico : $arquivo_calendario_academico; ?>" target="_blank">Calendário acadêmico</a></li>
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
            
            <?php

                $url_manual_institucional = null;
                $arquivo_manual_institucional = null;

                if ($GLOBALS["documentos_fields"]["url_manual_institucional"]) :
                    $url_manual_institucional = $GLOBALS["documentos_fields"]["url_manual_institucional"];
                else:
                    $arquivo_manual_institucional = $GLOBALS["documentos_fields"]["arquivo_manual_institucional"];
                endif;
            ?>
            
            <li><a href="<?php echo ($url_manual_institucional) ? $url_manual_institucional : $arquivo_manual_institucional; ?>" target="_blank">Manual institucional</a></li>
            
            
            <?php

                $url_regulamentos_institucionais = null;
                $arquivo_regulamentos_institucionais = null;

                if ($GLOBALS["documentos_fields"]["url_regulamentos_institucionais"]) :
                    $url_regulamentos_institucionais = $GLOBALS["documentos_fields"]["url_regulamentos_institucionais"];
                else:
                    $arquivo_regulamentos_institucionais = $GLOBALS["documentos_fields"]["arquivo_regulamentos_institucionais"];
                endif;
            
            ?>
            
            <li><a href="<?php echo ($url_regulamentos_institucionais) ? $url_regulamentos_institucionais : $arquivo_regulamentos_institucionais; ?>" target="_blank">Regulamentos institucionais</a></li>
        </ul>

    </article>

    <article class="col-25">

        <ul>
            <li>Publicações</li>

            <?php

                $url_revista_cientifica_ies = null;
                $arquivo_revista_cientifica_ies = null;

                if ($GLOBALS["publicacoes_fields"]["url_revista_cientifica_ies"]) :
                    $url_revista_cientifica_ies = $GLOBALS["publicacoes_fields"]["url_revista_cientifica_ies"];
                else:
                    $arquivo_revista_cientifica_ies = $GLOBALS["publicacoes_fields"]["arquivo_revista_cientifica_ies"];
                endif;

            ?>

            <li><a href="<?php echo ($url_revista_cientifica_ies) ? $url_revista_cientifica_ies : $arquivo_revista_cientifica_ies; ?>" target="_blank">Revista científica IES</a></li>
            
            <?php

                $url_revista_cientifica_dos_cursos = null;
                $arquivo_revista_cientifica_dos_cursos = null;

                if ($GLOBALS["publicacoes_fields"]["url_revista_cientifica_dos_cursos"]) :
                    $url_revista_cientifica_dos_cursos = $GLOBALS["publicacoes_fields"]["url_revista_cientifica_dos_cursos"];
                else:
                    $arquivo_revista_cientifica_dos_cursos = $GLOBALS["publicacoes_fields"]["arquivo_revista_cientifica_dos_cursos"];
                endif;

            ?>
            
            <li><a href="<?php echo ($url_revista_cientifica_dos_cursos) ? $url_revista_cientifica_dos_cursos : $arquivo_revista_cientifica_dos_cursos; ?>" target="_blank">Revista científica dos cursos</a></li>
            
            
            <?php

                $url_acervo_cientifico = null;
                $arquivo_acervo_cientifico = null;

                if ($GLOBALS["publicacoes_fields"]["url_acervo_cientifico"]) :
                    $url_acervo_cientifico = $GLOBALS["publicacoes_fields"]["url_acervo_cientifico"];
                else:
                    $arquivo_acervo_cientifico = $GLOBALS["publicacoes_fields"]["arquivo_acervo_cientifico"];
                endif;

            ?>
            
            <li><a href="<?php echo ($url_acervo_cientifico) ? $url_acervo_cientifico : $arquivo_acervo_cientifico; ?>" target="_blank">Acervo científico</a></li>
        </ul>

    </article>

    <article class="col-25">

        <ul>
            <li>Links úteis</li>

            <?php

                $url_nucleo_de_apoio_psicopedagogico = null;
                $arquivo_nucleo_de_apoio_psicopedagogico = null;

                if ($GLOBALS["links_fields"]["url_nucleo_de_apoio_psicopedagogico"]) :
                    $url_nucleo_de_apoio_psicopedagogico = $GLOBALS["links_fields"]["url_nucleo_de_apoio_psicopedagogico"];
                else:
                    $arquivo_nucleo_de_apoio_psicopedagogico = $GLOBALS["links_fields"]["arquivo_nucleo_de_apoio_psicopedagogico"];
                endif;

            ?>

            <li><a href="<?php echo ($url_nucleo_de_apoio_psicopedagogico) ? $url_nucleo_de_apoio_psicopedagogico : $arquivo_nucleo_de_apoio_psicopedagogico; ?>" target="_blank">Núcleo de Apoio Psicopedagógico</a></li>
            
            
            <?php

                $url_comite_de_etica_em_pesquisa_com_seres_humanos = null;
                $arquivo_comite_de_etica_em_pesquisa_com_seres_humanos = null;

                if ($GLOBALS["links_fields"]["url_comite_de_etica_em_pesquisa_com_seres_humanos"]) :
                    $url_comite_de_etica_em_pesquisa_com_seres_humanos = $GLOBALS["links_fields"]["url_comite_de_etica_em_pesquisa_com_seres_humanos"];
                else:
                    $arquivo_comite_de_etica_em_pesquisa_com_seres_humanos = $GLOBALS["links_fields"]["arquivo_comite_de_etica_em_pesquisa_com_seres_humanos"];
                endif;

            ?>

            <li><a href="<?php echo ($url_comite_de_etica_em_pesquisa_com_seres_humanos) ? $url_comite_de_etica_em_pesquisa_com_seres_humanos : $arquivo_comite_de_etica_em_pesquisa_com_seres_humanos; ?>" target="_blank">Comitê de Ética em Pesquisa com seres humanos</a></li>
            
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
            <li><a href="#trabalhe-conosco" rel="modal:open" onclick=modelEvent(event)>Trabalhe conosco</a></li>
            <li><a href="#fale-conosco"     rel="modal:open" onclick=modelEvent(event)>Fale conosco</a></li>
        </ul>

    <?php get_template_part('modal/trabalhe'); ?>
	<?php get_template_part('modal/contato'); ?>
	<?php get_template_part('modal/inscrevase'); ?>

    </article>

</section>

</div>


<footer>

2019 - Faculdade Católica de Fortaleza. Todos os direitos reservados

</footer>

<?php wp_footer(); ?>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.js' ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.validate.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/slick.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/modal.js' ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/funcoes.js' ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/app.js' ?>"></script>

</body>

</html>