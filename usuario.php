<?php
session_start();
include('conexao.php');
$funcao = $_GET["funcao"];


if ($funcao == "cadastrar") {
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

  $insere = mysqli_query($conn, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    
    if ($insere) {
        echo "<script>alert('cadastro realizado com sucesso!!'); location.href='cadusuario.php'; </script>";
    } else {
        echo "<script>alert('Não foi possível inserir os dados!!');history.back(-1);</script>";
    }
}

if ($funcao == "alterar") {
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $emailaltera = $_GET['email'];

    $altera = mysqli_query($conn, "UPDATE usuarios SET nome='$nome', email='$email' WHERE email='$emailaltera'");

    if ($altera) {
        echo "<script>alert('Alteração realizada com sucesso!!');location.href='listaTabelaUsu.php';</script>";
    } else {
        echo "<script>alert('Não foi possível alterar os dados!!');history.back(-1);</script>";
    }
}

if ($funcao == "excluir") {
    $emailexclui = $_GET['email'];
    $exclui = mysqli_query($conn, "DELETE FROM usuarios WHERE email='$emailexclui'");

    if ($exclui) {
        echo "<script>alert('Exclusão realizada com sucesso!!');location.href='listaTabelaUsu.php';</script>";
    } else {
        echo "<script>alert('Não foi possível excluir os dados!!');history.back(-1);</script>";
    }
}

if ($funcao == "logar") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = mysqli_query($conn, "SELECT * FROM usuarios where email='$email' and senha='$senha'");   
    $numReg = mysqli_num_rows($query);                  
    
    if ($numReg) {
      

            session_start();
            session_unset();
            $_SESSION['email']=$email;
            echo "<script>alert('login realizado com sucesso!!'); location.href='restrita.php'; </script>";

    } else {
        echo "<script>alert('Não foi possível logar os dados!!');location.href='login.php'; </script>";
    }
}

if($funcao=="logoff"){
    session_unset();
    session_destroy();
    
    echo "<script>alert('Sessão encerrada!!');location.href='login.php'; </script>";
}
?>

