<?php
include("conexao.php");

$funcao = $_GET['funcao'];


if ($funcao == "cadastrar") {
    
    $arquivo = $_FILES['arquivo'];
    $descricao = $_POST['descricao'];

    $tipo = $arquivo['type'];


    if (
        $tipo == 'image/jpeg' || $tipo == 'image/jpg' || 
        $tipo == 'image/png' || $tipo == 'image/gif'
    ) {

        if ($arquivo['size'] > 1000000) {
            exit("Arquivo muito grande! Máximo: 1MB");
        }


        $novonome = md5(mt_rand(1, 100000) . $arquivo['name']) . ".jpg";

        $dir = "album/";


        if (!file_exists($dir)) {
            mkdir($dir, 0755);
        }

        $caminho = $dir . $novonome;


        $insere = mysqli_query($conn, "
            INSERT INTO album (nomefoto, descricao)
            VALUES ('$novonome', '$descricao')
        ");

        if ($insere) {
            move_uploaded_file($arquivo['tmp_name'], $caminho);
            echo "<script>alert('Imagem cadastrada!');location.href='restrita.php';</script>";
        } else {
            echo "<script>alert('Erro ao inserir dados!');history.back();</script>";
        }

    } else {
        echo "<script>alert('Arquivo inválido!');history.back();</script>";
    }
}




if ($funcao == "excluir") {

    $cod = $_GET['cod'];


    $consulta = mysqli_query($conn, "SELECT nomefoto FROM album WHERE codfoto='$cod'");
    $img = mysqli_fetch_assoc($consulta);

    if ($img) {
        $arquivo = "album/" . $img['nomefoto'];
        if (file_exists($arquivo)) {
            unlink($arquivo);
        }
    }

  
    $exclui = mysqli_query($conn, "DELETE FROM album WHERE codfoto='$cod'");

    if ($exclui) {
        echo "<script>alert('Imagem excluída!');location.href='exibefoto.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir!');history.back();</script>";
    }
}
?>
