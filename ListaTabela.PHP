<?php
include ("conexao.php");
?>

<p>Alterar ou Excluir</p>
<table border="1" align="center" >
    <tr>
        <td colspan="4" align="center">LISTA DE USUÁRIOS CADASTRADOS</td>
    </tr>
    <tr>
        <td>Nome</td>
        <td>Email</td>
    </tr>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM usuarios ");
    while ($dados = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?php echo ($dados["nome"]); ?></td>
        <td><?php echo ($dados["email"]); ?></td>
    </tr>
    <?php } ?>
</table>
