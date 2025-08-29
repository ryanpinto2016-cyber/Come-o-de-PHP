<?php
$nome = "";
$email = "";
$cpf = "";

if (!isset($_GET['nome']) || !isset($_GET['email']) || !isset($_GET['cpf'])) {
    echo "Por favor, preencha os dados novamente.";
} else {
    if (!empty($_GET['nome']) && !empty($_GET['email']) && !empty($_GET['cpf'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $cpf = $_GET['cpf'];

        echo "$nome, $email, $cpf";
    } else {
        echo "Por favor, preencha os dados novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Formulário</h2>

    <form action="index.php" method="get">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" placeholder = "Digite o Nome...">
        <br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" placeholder = "Digite o E-mail...">
        <br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" placeholder = "Digite o CPF...">
        <br><br>

        <button type="submit">enviar</button>
</form>    

</body>
</html>