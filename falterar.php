<html>

<?php
include("conexao.php");	
$email = $_GET['email'];
$consulta = mysqli_query($conn,"SELECT * FROM usuarios WHERE email='$email'");
$dados=mysqli_fetch_array($consulta);
?>
<style type="text/css">
p {
	color: #003;
	font-weight: bold;
}
</style>
<p><a href="cadusuario.php"></a></p>
<form name="form" method="post" action="usuario.php?funcao=alterar&email=<?php echo $dados["email"];?>">
  <table width="415">
	<td colspan="2"><p>FORMULÁRIO DE ALTERAÇÃO</p>
	  <p>&nbsp;</p></td>
<tr>
	<td> Nome:</td>
	<td><input type="text" name="nome" value="<?php echo $dados["nome"]; ?>"> </td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="email" value="<?php echo $dados["email"];?>"> </td>
</tr>
<tr>
	<td>Senha:</td>
	<td><input type="text" name="senha" value="<?php echo $dados["senha"];?>"> </td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Alterar"> </td>
</tr>
</table>
  <p>&nbsp;</p>
</form>	
<p><a href="cadusuario.php">CADASTRAR USUÁRIOS</a> | <a href="restrita.php">Menu  de Acesso</a></p>
</body>
</html>

