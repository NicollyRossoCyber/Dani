<?php
// View para inserir escolas e exibir o formulário

require_once($_SERVER['DOCUMENT_ROOT'] . "/table/controller/EscolaController.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/table/model/Escola.php");

$msgErro = '';
$escola = null;

if(isset($_POST['submetido'])) {
    // Captura os campos do formulário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $endereco = $_POST['endereco'] ? $_POST['endereco'] : null;
    $cidade = trim($_POST['cidade']) ? trim($_POST['cidade']) : null;
    $qtd_alunos = is_numeric($_POST['qtd_alunos']) ? $_POST['qtd_alunos'] : null;
    
    // Criar um objeto Escola para persistência
    $escola = new Escola();
    $escola->setNome($nome);
    $escola->setEndereco($endereco);
    $escola->setCidade($cidade);
    $escola->setQtd_alunos($qtd_alunos);

    // Instanciar o controlador e chamar o método inserir
    $escolaController = new EscolaController();
    $erros = $escolaController->inserir($escola);

    // Verificar se houve algum erro ao inserir
    if (!empty($erros)) {
        $msgErro = implode('<br>', $erros);
    }
}

// Exibir o formulário
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Escola</title>
</head>
<body>

<h2>Inserir Escola</h2>

<div class="row mb-3">
    <div class="col-6">
        <form id="frmEscola" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="form-group">
                <label for="txtNome">Nome:</label>
                <input type="text" name="nome" id="txtNome" class="form-control" />
            </div>

            <div class="form-group">
                <label for="txtEndereco">Endereço:</label>
                <input type="text" name="endereco" id="txtEndereco" class="form-control" />
            </div>

            <div class="form-group">
                <label for="txtCidade">Cidade:</label>
                <input type="text" name="cidade" id="txtCidade" class="form-control" />
            </div>

            <div class="form-group">
                <label for="txtQtd_alunos">Quantidade de alunos:</label>
                <input type="text" name="qtd_alunos" id="txtQtd_alunos" class="form-control" />
            </div>

            <input type="hidden" name="submetido" value="1" />

            <button type="submit" class="btn btn-success">Gravar</button>

        </form>
    </div>
</div>

<?php
// Exibir mensagens de erro, se houverem
if (!empty($msgErro)) {
    echo "<div class='alert alert-danger'>$msgErro</div>";
}
?>

</body>
</html>