<!-- USANDO O MÉTODO POST -->
 <!-- POST: Método HTML padrao, a requisiçao é enviada DIRETAMENTE no corpo do HTML -->

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de formulario de Cadastro</title>
 </head>
 <body>
    <!-- Medotodo POST ou GET -->
     <form method="post" action="">

        <label for="nome">Nome</label>
        <input type="text" name="nome" require><br>

        <label for="email">Email:</label>
        <input type="text" name="email" require><br>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" require><br>

        <button type="submit">Enviar</button> 
     </form>

     <!-- Parte do programa em PHP-->
     <?php
        // Verifique se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            //Recebe os valores enviados pelo formulário
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            //Exibe os valores recebidos
            echo "<h2>Dados Recebidos:</h2>";
            echo "Nome: $nome<br>";
            echo "Email: $email<br>";
            echo "Telefone: $telefone<br>";
        }
    ?>
</body>
</html>
