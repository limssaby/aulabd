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
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Fotos</title>
</head>
<body>

<form action="album.php?funcao=cadastrar" method="post" enctype="multipart/form-data">
    
    <p><input type="file" name="arquivo" required></p>

    <p>Descrição:<br>
    <textarea name="descricao" rows="4" required></textarea></p>

    <p><input type="submit" value="Enviar"></p>

</form>

</body>
</html>
