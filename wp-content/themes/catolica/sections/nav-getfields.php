<?php 
    //topo
    $GLOBALS["fields_botoes_menu"] = get_field('botoes_menu', 38);
    
    //rodapé
    $GLOBALS["academico_fields"] = get_field('academico', 38);
    $GLOBALS["documentos_fields"] = get_field('documentos', 38);
    $GLOBALS["publicacoes_fields"] = get_field('publicacoes', 38);
    $GLOBALS["links_fields"] = get_field('links_uteis', 38);

    //single do curso
    $GLOBALS["curso_fields"] = get_field('curso');

    //redes sociais
    while(the_repeater_field('redes_sociais')): 

        $GLOBALS["icone_rede_social"][] = get_sub_field('icone_rede_social'); 
        $GLOBALS["link_rede_social"][] = get_sub_field('link_rede_social'); 

    endwhile; 
?>
