<?php
session_start();
include ("conexao.php");

if ($_SESSION['email']==""){
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else{
    echo "Usuário Logado: ". $_SESSION['email'];
}

?>
<p>Alterar ou Excluir</p>
<table border="1" align="center" >
    <tr>
        <td colspan="4" align="center">LISTA DE USUÁRIOS CADASTRADOS</td>
    </tr>
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Alterar</td>
        <td>Excluir</td>

    </tr>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM usuarios ");
    while ($dados = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?php echo ($dados["nome"]); ?></td>
        <td><?php echo ($dados["email"]); ?></td>
        <td> <a href = "falterar.php?email=<?php echo ($dados["email"]);?>"> Alterar </a></td>
  
        <td> <a href = "usuario.php?email=<?php echo ($dados["email"]);?>&funcao=excluir"> Excluir</td>
    </tr>
    <?php } ?>
</table>



