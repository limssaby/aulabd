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
echo '<form method="post" action="noticia.php?funcao=cadastrar">
Titulo: <input type="text" name="titulo"><br><br>
Conteudo: <input type="text" name="conteudo"><br><br>

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