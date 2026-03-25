<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link href="https://fonts.googleapis.com/css2?family:Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

:root {
    --rosa: #ff9bd1;
    --lavanda: #e7ddff;
    --creme: #fff4fa;
    --texto: #4a4a4a;
    --white: #ffffff;
    --radius: 22px;
    --shadow: 0 8px 20px rgba(0,0,0,0.08);
}

/* Fundo geral */
body {
    font-family: "Poppins", sans-serif;
    background: linear-gradient(135deg, #ffe6f4, #eae1ff);
    margin: 0;
    padding: 20px;
    color: var(--texto);
}

/* Header estilo site premium */
header {
    width: calc(100% - 40px);
    margin: 0 auto 30px auto;
    padding: 18px 25px;
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(12px);
    border-radius: var(--radius);
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: var(--shadow);
}

/* Nome do site */
header h2 {
    margin: 0;
    font-size: 24px;
    font-weight: 600;
    color: var(--texto);
}

/* Botão login */
header button {
    background: var(--rosa);
    border: none;
    padding: 12px 22px;
    color: white;
    border-radius: var(--radius);
    font-size: 15px;
    cursor: pointer;
    transition: .25s ease;
    font-weight: 500;
}

header button:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 18px rgba(255, 121, 185, 0.35);
}

/* Títulos sessôn */
.titulo-sessao {
    text-align: center;
    font-size: 32px;
    margin: 40px 0 25px;
    font-weight: 600;
    color: var(--texto);
}

/* Notícias Cards */
.noticia {
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(10px);
    padding: 25px;
    border-radius: var(--radius);
    width: 85%;
    max-width: 950px;
    margin: 20px auto;
    box-shadow: var(--shadow);
    transition: .3s ease;
}

.noticia:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.12);
}

.noticia h3 {
    margin: 0;
    font-size: 22px;
    font-weight: 600;
    color: var(--rosa);
}

/* --- GALERIA --- */
.galeria {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
}

/* Foto card */
.foto-card {
    width: 230px;
    padding: 14px;
    background: var(--white);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    text-align: center;
    transition: .25s ease;
}

.foto-card:hover {
    transform: scale(1.06);
    box-shadow: 0 14px 30px rgba(0,0,0,0.15);
}

/* Imagens */
.foto-card img {
    width: 100%;
    border-radius: var(--radius);
    transition: .25s;
}

.foto-card img:hover {
    transform: scale(1.1);
}

/* Texto foto */
.foto-desc {
    margin-top: 8px;
    font-size: 15px;
    color: #555;
    font-weight: 500;
}

</style>

</head>
<body>

<header>
    <h2>Site Aula da Elisandra</h2>
    <button onclick="window.location.href='login.php'">Login</button>
</header>

<h1 class="titulo-sessao">Notícias</h1>

<?php
include("conexao.php"); 
$query = mysqli_query($conn, "SELECT * FROM noticia ORDER BY codnoticia DESC");

while ($dados = mysqli_fetch_assoc($query)) {
?>
    <div class="noticia">
        <h3><?php echo $dados["titulo"]; ?></h3>
        <p><?php echo $dados["conteudo"]; ?></p>
    </div>
<?php
}
?>

<h1 class="titulo-sessao">Galeria de Imagens</h1>

<div class="galeria">
<?php
    $query2 = mysqli_query($conn, "SELECT * FROM album ORDER BY codfoto DESC");
    while ($foto = mysqli_fetch_assoc($query2)) {
?>
        <div class="foto-card">
            <img src="album/<?php echo $foto['nomefoto']; ?>">
            <div class="foto-desc"><?php echo $foto['descricao']; ?></div>
        </div>
<?php } ?>
</div>

</body>
</html>
