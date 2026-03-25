<html>

<?php
include("conexao.php");	

$cod = $_GET['codnoticia'];

// Busca a notícia pelo código
$consulta = mysqli_query($conn,"SELECT * FROM noticia WHERE codnoticia='$cod'");
$dados = mysqli_fetch_array($consulta);
?>

<style type="text/css">
p {
	color: #003;
	font-weight: bold;
}
</style>

<p><a href="listatabelaNot.php"></a></p>

<form name="form" method="post" action="noticia.php?funcao=alterar&codnoticia=<?php echo $dados['codnoticia']; ?>">
  <table width="415">
	<td colspan="2">
        <p>FORMULÁRIO DE ALTERAÇÃO DE NOTÍCIA</p>
        <p>&nbsp;</p>
    </td>

<tr>
	<td>Código:</td>
	<td><input type="text" name="codnoticia" value="<?php echo $dados['codnoticia']; ?>" readonly></td>
</tr>

<tr>
	<td>Título:</td>
	<td><input type="text" name="titulo" value="<?php echo $dados['titulo']; ?>"></td>
</tr>

<tr>
	<td>Conteúdo:</td>
	<td>
        <textarea name="conteudo" rows="5" cols="35"><?php echo $dados['conteudo']; ?></textarea>
    </td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" value="Alterar"></td>
</tr>

</table>
  <p>&nbsp;</p>
</form>

<p>
    <a href="Fnoticia.php">CADASTRAR NOTÍCIA</a> | 
    <a href="restrita.php">Menu de Acesso</a>
</p>

</body>
</html>
