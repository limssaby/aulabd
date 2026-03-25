<?php
include('conexao.php');
$funcao = $_GET["funcao"];


if ($funcao == "cadastrar") {
    $codnoticia = $_POST['codnoticia'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

  $insere = mysqli_query($conn, "INSERT INTO noticia (codnoticia,titulo,conteudo) VALUES ('$codnoticia', '$titulo', '$conteudo')");
    
    if ($insere) {
        echo "<script>alert('cadastro realizado com sucesso!!'); location.href='restrita.php'; </script>";
    } else {
        echo "<script>alert('Não foi possível inserir os dados!!');history.back(-1);</script>";
    }
}

if ($funcao == "alterar") {
    $codnoticia = $_POST['codnoticia'];
    $titulo = $_POST['titulo'];      
    $conteudo = $_POST['conteudo']; 
  
    $altera = mysqli_query($conn, "
        UPDATE noticia 
        SET titulo='$titulo', conteudo='$conteudo'
        WHERE codnoticia='$codnoticia'
    ");

    if ($altera) {
        echo "<script>alert('Alteração realizada com sucesso!!');location.href='listatabelaNot.php';</script>";
    } else {
        echo "<script>alert('Não foi possível alterar os dados!!');history.back(-1);</script>";
    }
}


if ($funcao == "excluir") {
    $codnoticia = $_GET['codnoticia']; // recebe o ID da notícia

    $exclui = mysqli_query($conn, "DELETE FROM noticia WHERE codnoticia='$codnoticia'");

    if ($exclui) {
        echo "<script>alert('Exclusão realizada com sucesso!!');location.href='listatabelaNot.php';</script>";
    } else {
        echo "<script>alert('Não foi possível excluir os dados!!');history.back(-1);</script>";
    }
}

?>


