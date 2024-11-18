<!-- o programa exibe os dados recebidos em lista no formato tabela -->

<?php
//array associativo contendo informaçoes de produtos
$produtos = [
    ["nome"=>"Camiseta","preco"=>50.00, "quantidade" =>10],
    ["nome"=>"Calça Jeans","preco"=>100.00,"quantidade"=>7],
];

//exibe os produtos em formato de tabela
echo "<table border='1'>";

//Titulo da tabela
echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";

// Para cada 'produto' do vetor 'produtos'
foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
    echo "<td>" . $produto['quantidade'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>