<?php 
    $parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
    require_once($parse_uri[0] . 'wp-load.php');
?>
<div class="col-100">

    <h1 class="center">Fale conosco</h1>

    <p class="center">Preencha o formulário abaixo e em breve lhe retornaremos</p>

    <form>

        <h6>Dados pessoais</h6>
        <div class="col-50"><input type="text" name="nome" placeholder="Nome:"></div>
        <div class="col-50"><input type="text" name="email" placeholder="Email:"></div>
    
        <h6>Área que deseja entrar em contato</h6>
        <div class="col-50">
            <select name="unidade">
                <option value="--">Núcleo de Apoio ao Estudante</option>
                <option value="fortaleza">Fortaleza</option>
                <option value="crato">Crato</option>
                <option value="juazeiro">Juazeiro</option>
            </select>
        </div>
        <div class="col-50">
            <select name="unidade">
                <option value="--">Atendimento ao aluno</option>
                <option value="fortaleza">Fortaleza</option>
                <option value="crato">Crato</option>
                <option value="juazeiro">Juazeiro</option>
            </select>
        </div>
        <div class="col-100"><textarea name="mensagem" placeholder="Escreva aqui sua mensagem:"></textarea></div>
        
        
        <div class="col-50"><a href="<?php echo get_template_directory_uri() . '/modal/areas.php'; ?>" rel="modal:open">Não sabe para qual área deve enviar seu contato?</a></div>

        <div class="col-50"><input type="submit" class="btn-pri" value="Enviar!"></div>

    </form>

</div>