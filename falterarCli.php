<html>

<?php
include("conexao.php");	
$Cpf = $_GET['Cpf'];
$consulta = mysqli_query($conn,"SELECT * FROM cliente WHERE Cpf='$Cpf'");
$dados=mysqli_fetch_array($consulta);
?>
<style type="text/css">
p {
	color: #003;
	font-weight: bold;
}
</style>
<p><a href="Fcliente.php"></a></p>
<form name="form" method="post" action="Cliente.php?funcao=alterarCli&Cpf=<?php echo $dados["Cpf"];?>">
  <table width="415">
	<td colspan="2"><p>FORMULÁRIO DE ALTERAÇÃO</p>
	  <p>&nbsp;</p></td>

<tr>
	<td> Cpf:</td>
	<td><input type="text" name="Cpf" value="<?php echo $dados["Cpf"]; ?>"> </td>
</tr>
<tr>
	<td>Nome:</td>
	<td><input type="text" name="nome" value="<?php echo $dados["nome"];?>"> </td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="email" value="<?php echo $dados["email"];?>"> </td>
</tr>
<tr>
	<td>Endereço:</td>
	<td><input type="text" name="Endereco" value="<?php echo $dados["Endereco"];?>"> </td>
</tr>
<tr>
	<td>Telefone:</td>
	<td><input type="text" name="Telefone" value="<?php echo $dados["Telefone"];?>"> </td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Alterar"> </td>
</tr>



</table>
  <p>&nbsp;</p>
</form>	
<p><a href="Fcliente.php">CADASTRAR CLIENTES</a> | <a href="restrita.php">Menu  de Acesso</a></p>
</body>
</html>

