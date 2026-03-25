<?php
session_start();
?>
<?php
if ($_SESSION['email']==""){
    echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
} else{
    echo "Usuário Logado: ". $_SESSION['email'];
}

?>

<html>
<head>
<meta charset="utf-8">
<title>Galeria de Fotos</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .galeria {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        margin-top: 30px;
    }

    .foto-card {
        background: #ffffff;
        width: 220px;
        padding: 12px;
        border-radius: 12px;
        box-shadow: 0px 3px 12px rgba(0,0,0,0.15);
        text-align: center;
        transition: 0.3s;
    }

    .foto-card img {
        width: 100%;
        border-radius: 10px;
        transition: 0.3s;
    }

    .foto-card img:hover {
        transform: scale(1.05);
    }

    .foto-desc {
        margin-top: 8px;
        font-size: 14px;
        color: #444;
    }

    .btn-excluir {
        margin-top: 10px;
        display: inline-block;
        background: #c62828;
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: 0.2s;
    }

    .btn-excluir:hover {
        background: #a60000;
    }
</style>


</head>
<body>

<?php include("conexao.php"); ?>

<table border="0" align="center">
<tr>

<div class="galeria">
<?php
$query = mysqli_query($conn, "SELECT * FROM album ORDER BY codfoto DESC");

while ($dados = mysqli_fetch_assoc($query)) {
?>
    <div class="foto-card">
        <img src="album/<?php echo $dados['nomefoto']; ?>">
        
        <div class="foto-desc">
            <?php echo $dados['descricao']; ?>
        </div>

        <a class="btn-excluir"
           href="album.php?funcao=excluir&cod=<?php echo $dados['codfoto']; ?>">
            Excluir
        </a>
    </div>
<?php } ?>
</div>


</tr>
</table>


</body>
</html>
