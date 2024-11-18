<!-- USANDO A FUNÇÃO GET -->
 <!-- GET: método HTML padrão, a requisição é enviada como uma string anexada a URL -->

 <!-- Esse programa recebe dois valores pela URL usando o método GET -->
  <!-- http://localhost/php-basico-Rayanne/2_opera_variaveis.php?numero1=100&numero2=30 -->
<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // Verifica se os valores foram passados corretamente
    if(isset($numero1) && isset($numero2)){
        // converter para inteiros
        $numero1 = (int)$numero1;
        $numero2 = (int)$numero2;

        // Realiza as operações aritméticas básicas

        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;

        // Exibe os resultados
        echo "Soma: $soma <br>";
        echo "Subtração: $subtracao <br>";
        echo "Multiplicação: $multiplicacao <br>";
        echo "Divisão: $divisao <br>";
    }else{
        echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2 pela URL.";
    }
?>