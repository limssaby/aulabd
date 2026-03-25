<?php
session_start();
?>

<?php
include('conexao.php');

$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : '';

if ($funcao == "cadastrar") {
    $Cpf = $_POST['Cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $Endereco = $_POST['Endereco'];
    $Telefone = $_POST['Telefone'];

    
    $insere = mysqli_query($conn, "INSERT INTO cliente (nome, email, Cpf, Endereco, Telefone) VALUES ('$nome', '$email', '$Cpf', '$Endereco', '$Telefone')");

    if ($insere) {
        echo "<script>alert('Cadastro realizado com sucesso!'); location.href='Restrita.php'; </script>";
    } else {
        echo "<script>alert('Não foi possível inserir os dados!'); history.back(-1);</script>";
    }
}

if ($funcao == "alterarCli") {


    $Cpf = $_POST['Cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $Endereco = $_POST['Endereco'];
    $Telefone = $_POST['Telefone'];

    $Cpfaltera = $_GET['Cpf'];
    $altera = mysqli_query($conn, "
        UPDATE cliente 
        SET Cpf='$Cpf',
            nome='$nome',
            email='$email',
            Endereco='$Endereco',
            Telefone='$Telefone'
        WHERE Cpf='$Cpfaltera'
    ");

    if ($altera) {
        echo "<script>alert('Alteração realizada com sucesso!!');location.href='listaTabelaCli.php';</script>";
    } else {
        echo "<script>alert('Não foi possível alterar os dados!!');history.back(-1);</script>";
    }
}

if ($funcao == "excluir") {

    $Cpfexclui = $_GET['Cpf']; 

    $exclui = mysqli_query($conn, "DELETE FROM cliente WHERE Cpf='$Cpfexclui'");

    if ($exclui) {
        echo "<script>alert('Exclusão realizada com sucesso!!');location.href='listaTabelaCli.php';</script>";
    } else {
        echo "<script>alert('Não foi possível excluir os dados!!');history.back(-1);</script>";
    }
}


?>
