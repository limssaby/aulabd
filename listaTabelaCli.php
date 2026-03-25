<?php
session_start();
?>

<?php
include ("conexao.php");
?>
<p>Alterar ou excluir</p>

<table border="1" align="center">
    <tr>
        <td colspan="7" align="center">LISTA TABELA</td>
    </tr>
    <tr>
        <td>CPF</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Endereço</td>
        <td>Alterar</td>
        <td>Excluir</td>
    </tr>

<?php
$query = mysqli_query($conn, "SELECT * FROM cliente");
while ($dados = mysqli_fetch_assoc($query)){
?>
<tr>
    <td><?php echo $dados["Cpf"]; ?></td>
    <td><?php echo $dados["nome"]; ?></td>
    <td><?php echo $dados["email"]; ?></td>
    <td><?php echo $dados["Telefone"]; ?></td>
    <td><?php echo $dados["Endereco"]; ?></td>

    <!-- ALTERAR -->
    <td>
        <a href="falterarCli.php?Cpf=<?php echo $dados['Cpf']; ?>">Alterar</a>
    </td>

    <!-- EXCLUIR (correto agora) -->
    <td>
        <a href="Cliente.php?Cpf=<?php echo $dados['Cpf']; ?>&funcao=excluir"
           onclick="return confirm('Tem certeza que deseja excluir este cliente?');">
           Excluir
        </a>
    </td>
</tr>
<?php
}
?>
</table>

<?php
// Verifica login
if ($_SESSION['email'] == ""){
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else {
    echo "Usuário Logado: " . $_SESSION['email'];
}
?>
