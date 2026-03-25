<?php
session_start();
include("conexao.php");
?>

<p>Alterar ou excluir</p>

<table border="1" align="center">
    <tr>
        <td colspan="4" align="center">LISTA DE NOTÍCIAS</td>
    </tr>
    <tr>
        <td>Código</td>
        <td>Título</td>
        <td>Conteúdo</td>
        <td>Ações</td>
    </tr>

<?php
$query = mysqli_query($conn, "SELECT * FROM noticia ORDER BY codnoticia ASC");

while ($dados = mysqli_fetch_assoc($query)) {
?>
    <tr>
        <td><?php echo $dados["codnoticia"]; ?></td>
        <td><?php echo $dados["titulo"]; ?></td>
        <td><?php echo $dados["conteudo"]; ?></td>

        <td>
            <!-- Ajuste: links agora corretos -->
            <a href="falterarNoticia.php?codnoticia=<?php echo $dados['codnoticia']; ?>">Alterar</a> |
            <a href="noticia.php?codnoticia=<?php echo $dados['codnoticia']; ?>&funcao=excluir">Excluir</a>
        </td>
    </tr>
<?php
}
?>
</table>

<?php
if (empty($_SESSION['email'])) {
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else {
    echo "Usuário Logado: " . $_SESSION['email'];
}
?>
