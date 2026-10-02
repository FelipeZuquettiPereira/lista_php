<!-- Exercício 12 – Catálogo de Produtos
Um supermercado deseja organizar automaticamente seu catálogo de produtos.
Crie uma função chamada analisarProdutos() que receba um vetor contendo o
nome e o preço dos produtos.
A função deverá retornar:
● Produto mais caro;
● Produto mais barato;
● Média dos preços;
● Pesquisa de um produto informado pelo usuário -->


<?php 

function analisarProdutos($produtos, $produtoPesquisa) {
    $maisCaro = null;
    $maisBarato = null;
    $somaPrecos = 0;
    $quantidadeProdutos = count($produtos);
    $produtoEncontrado = null;

    foreach ($produtos as $produto) {
        if ($maisCaro === null || $produto['preco'] > $maisCaro['preco']) {
            $maisCaro = $produto;
        }
        if ($maisBarato === null || $produto['preco'] < $maisBarato['preco']) {
            $maisBarato = $produto;
        }
        $somaPrecos += $produto['preco'];

        if (strcasecmp($produto['nome'], $produtoPesquisa) === 0) {
            $produtoEncontrado = $produto;
        }
    }

    $mediaPrecos = ($quantidadeProdutos > 0) ? ($somaPrecos / $quantidadeProdutos) : 0;

    echo "Produto mais caro: " . ($maisCaro ? "{$maisCaro['nome']} - R$ {$maisCaro['preco']}" : "Nenhum produto") . "<br>";
    echo "Produto mais barato: " . ($maisBarato ? "{$maisBarato['nome']} - R$ {$maisBarato['preco']}" : "Nenhum produto") . "<br>";
    echo "Média dos preços: R$ " . number_format($mediaPrecos, 2, ',', '.') . "<br>";

    if ($produtoEncontrado) {
        echo "Produto pesquisado encontrado: {$produtoEncontrado['nome']} - R$ {$produtoEncontrado['preco']}<br>";
    } else {
        echo "Produto pesquisado não encontrado.<br>";
    }
}

analisarProdutos(
    [
        ['nome' => 'Arroz', 'preco' => 5.50],
        ['nome' => 'Feijão', 'preco' => 7.30],
        ['nome' => 'Macarrão', 'preco' => 4.20],
        ['nome' => 'Açúcar', 'preco' => 3.80],
        ['nome' => 'Óleo', 'preco' => 6.00]
    ],
    'Feijão'
);

?>