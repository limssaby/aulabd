<?php
session_start();
?>

<?php
include ("conexao.php");
?>
<p>Alterar ou excluir</p>
<table border="1" align="center">
    <tr>
        <td colspan="6" align="center">LISTA DE CLIENTES CADASTRADOS</td>
    </tr>
    <tr>
        <td>CPF</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Endereço</td>
    </tr>
<?php
$query = mysqli_query($conn, "SELECT * FROM cliente");
while ($dados = mysqli_fetch_assoc($query)){
?>
<tr>
    <td><?php echo ($dados["Cpf"]);?></td>
    <td><?php echo ($dados["nome"]);?></td>
    <td><?php echo ($dados["email"]);?></td>
    <td><?php echo ($dados["Telefone"]);?></td>
    <td><?php echo ($dados["Endereco"]);?></td>
</tr>
<?php
}
?>
</table>

<?php
if ($_SESSION['email']==""){
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else{
    echo "Usuário Logado: ". $_SESSION['email'];
}

?>