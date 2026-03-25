<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulabdphp</title>
</head>
<body>
    <?php
echo '<form method="post" action="Cliente.php?funcao=cadastrar">

Nome: <input type="text" name="nome"><br><br>
Cpf: <input type="text" name="Cpf"><br><br>
Email: <input type="text" name="email"><br><br>
Endereço: <input type="text" name="Endereco"><br><br>
Telefone: <input type" text" name="Telefone"><br><br>

<input type="submit" value="Cadastrar">
<input type="reset" value="Limpar">


</form>'
?>
<?php
if ($_SESSION['email']==""){
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else{
    echo "Usuário Logado: ". $_SESSION['email'];
}

?>

</body>
</html>