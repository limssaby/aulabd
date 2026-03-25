<?php
session_start();
?>

<?php
if ($_SESSION['email']==""){
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else{
    echo "Usuário Logado: ". $_SESSION['email'];
}

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
echo '<form method="post" action="usuario.php?funcao=cadastrar">
Nome: <input type="text" name="nome"><br><br>
Email: <input type="text" name="email"><br><br>
Senha: <input type="password" name="senha"><br><br>

<input type="submit" value="Cadastrar">
<input type="reset" value="Limpar">

</form>'
?>





</body>
</html>