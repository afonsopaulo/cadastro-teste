
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    
    <form method="post">
            <h2>Cadastro de Pessoas</h2>
            <p>Nome: <input type="text" name="nome"></p>
            <p>Idade: <input type="number" name="idade"></p>
            <p>Cidade: <input type="text" name="cidade"></p>
            <p>Numero: <input type="number" name="numero"></p>
            <p>Email: <input type="email" name="email"></p>
            <input type="submit" name="go" value="Enviar">
    </form>

    <?php

    $pdo = new PDO('mysql:host=localhost;dbname=teste','root','');

    if(isset($_POST['go'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cidade = $_POST['cidade'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];

        $sql = $pdo->prepare("INSERT INTO `dados` VALUES (null,?,?,?,?,?)");

        $sql->execute(array($nome,$idade,$cidade,$numero,$email));
        echo 'Cadastro Feito com sucesso!!!';
    };

    /*$arr = array($nome,$idade,$cidade,$numero,$email);
        $total = count($arr);

        for($i = 0; $i < $total; $i++){
            echo $arr[$i];
            echo '<br />';
        };*/


?>



</body>
</html>























