?php

$numero = rand(1, 100);
$tentativas = 0;

echo "ADIVINHE O NUMERO!\n";

do {

    echo "\nDigite um numero: ";
    $palpite = (int) fgets(STDIN);

    $tentativas++;

    if ($palpite == $numero) {
        echo "Parabens! Voce acertou!\n";
        echo "Tentativas: $tentativas\n";
    } elseif ($palpite < $numero) {
        echo "Tente um numero MAIOR!\n";
    } else {
        echo "Tente um numero MENOR!\n";
    }
} while ($palpite != $numero);

echo "Fim do jogo!\n";

?>
