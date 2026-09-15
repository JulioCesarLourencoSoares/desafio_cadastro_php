<?php
//Array associativo (contendo informações de produto)
$produtos = [
    ["nome" => "Camiseta", "preco" => 50.00, "quantidade" => 10, "marca" => "Insider", "cor" => "Preta"],
    ["nome" => "Calça Jeans", "preco" => 200.00, "quantidade" => 15, "marca" => "Levi's", "cor" => "Azul"],
    ["nome" => "Tênis", "preco" => 300.00, "quantidade" => 12, "marca" => "Converse", "cor" => "Vermelho"],
    ["nome" => "Carteira", "preco" => 80.00, "quantidade" => 7, "marca" => "Fossil", "cor" => "Marrom"],
    ["nome" => "Cinto", "preco" => 65.00, "quantidade" => 13, "marca" => "Nordweg", "cor" => "Preto" ],
];

// Exibir os dados em tabeça
echo "<table border='1'>";
echo "<caption><h2>Lista de Produtos</h2></caption>";
echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Marca</th><th>Cor</th></tr>";

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>R$" . number_format($produto['preco'], 2, ',', '.') . "</td>";
    echo "<td>" . $produto['quantidade'] . "</td>";
    echo "<td>" . $produto['marca'] . "</td>";
    echo "<td>" . $produto['cor'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>