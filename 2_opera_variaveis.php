<!-- Usando a função GET -->
 <!-- GET: método HTML padrão, a requisição é enciada como uma string anexada a URL -->
 
 <!-- Esse programa recebe dois valores pela URL usando o método GET -->

 <?php
   $numero1 = $_GET['numero1'];
   $numero2 = $_GET['numero2'];

   // Verifica se os valores foram passados corretamente

   if (isset($numero1) && isset($numero2)){

    //converter para inteiros
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    //SOMAR
    $soma = $numero1 + $numero2;
    //SUBTRAÇAO
    $subtracao = $numero1 - $numero2;
    //MULTIPLICAÇAO
    $multiplicacao = $numero1 * $numero2;
    // DIVISAO
    $divisao = $numero1 / $numero2;

    //Exibir Resultados 
    echo "A soma é: $soma <br>";
    echo "A subtração é: $subtracao <br>";
    echo "A multplicação é:$multiplicacao <br>";
    echo "A divisão é:$divisao <br>";
   }
    else{
        echo "ATENÇÃO! por favor, forneça os valores de numero1 e numero2 pela URL.";
   }

   //http://localhost/php-basico-La%C3%ADs/2_opera_variaveis.php?numero1=100&numero2=30
?>