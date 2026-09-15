<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Acesso</title>
</head>
<body>
    <h2>Verificação de Acesso</h2>

    <!-- 1. Formulário com os campos "Nome" e "Ano de Nascimento" -->
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="ano">Ano de Nascimento: </label>
        <input type="number" id="ano" name="ano" min="1900" max="<?php echo date('Y'); ?>" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <hr>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe e limpa os dados enviados
        $nome = htmlspecialchars($_POST['nome']);
        $anoNascimento = (int)$_POST['ano'];

        // 2. Calcula a idade do usuário
        $anoAtual = (int)date('Y');
        $idade = $anoAtual - $anoNascimento;

        // 3. Verifica se tem 18 anos ou mais
        if ($idade >= 18) {
            echo "<p style='color: green;'><strong>Acesso permitido, {$nome}!</strong></p>";

            // Salva o nome e a idade no arquivo log_acessos.txt
            $arquivo = fopen('log_acessos.txt', 'a');
            
            if ($arquivo) {
                $linha = "Nome: {$nome} | Idade: {$idade} anos | Data: " . date('d/m/Y H:i:s') . "\n";
                fwrite($arquivo, $linha);
                fclose($arquivo);
            }
        } else {
            // 4. Caso tenha menos de 18 anos
            echo "<p style='color: red;'><strong>Acesso negado, {$nome}!</strong></p>";
        }
    }
    ?>
</body>
</html>