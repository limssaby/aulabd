<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Área Restrita</title>

<!-- Fonte elegante -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Ícones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

/* -------- PALETA E BASE DO TEMA -------- */
:root {
  --rosa: #ff9bd1;
  --lavanda: #dcd4ff;
  --pessego: #ffd9b3;
  --menta: #d6ffe6;
  --creme: #fff6f9;
  --texto: #3c3c3c;
  --radius: 22px;
  --shadow: 0 8px 20px rgba(0,0,0,0.08);
  --transition: .25s ease;
}

/* Fundo total */
body {
  background: #efe9ff;
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
}

/* Conteúdo central */
.main-content {
  max-width: 1000px;
  margin: 40px auto;
  background: #fff;
  padding: 40px;
  border-radius: 30px;
  box-shadow: var(--shadow);
}

/* Título */
h1 {
  text-align: center;
  font-size: 26px;
  color: var(--texto);
  margin-bottom: 30px;
  font-weight: 600;
}

/* Usuário */
.user-info {
  text-align: right;
  color: var(--texto);
  font-size: 14px;
  margin-bottom: 15px;
}

/* ------ GRID DOS CARDS ------ */
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 25px;
  margin-top: 20px;
}

/* CARD INDIVIDUAL */
.card {
  background: white;
  border-radius: var(--radius);
  padding: 30px 20px;
  text-align: center;
  cursor: pointer;
  transition: var(--transition);
  position: relative;
  box-shadow: var(--shadow);
}

/* Hover luxurioso */
.card:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

/* Ícones */
.card i {
  font-size: 38px;
  color: var(--rosa);
  margin-bottom: 12px;
  transition: var(--transition);
}

/* Ícone cresce no hover */
.card:hover i {
  transform: scale(1.18);
}

/* Texto */
.card span {
  display: block;
  margin-top: 8px;
  font-size: 15px;
  font-weight: 500;
  color: var(--texto);
}

/* --------- VARIAÇÕES DE FUNDO --------- */
.card:nth-child(1) { background: var(--lavanda); }
.card:nth-child(2) { background: var(--pessego); }
.card:nth-child(3) { background: var(--rosa); color: white; }
.card:nth-child(3) i { color: white; }
.card:nth-child(4) { background: var(--menta); }
.card:nth-child(5) { background: var(--creme); }
.card:nth-child(6) { background: var(--lavanda); }
.card:nth-child(7) { background: var(--pessego); }
.card:nth-child(8) { background: var(--menta); }
.card:nth-child(9) { background: var(--rosa); color: white; }
.card:nth-child(9) i { color: white; }

</style>
</head>
<body>

<div class="main-content" id="main">
    <div class="user-info">
        <?php
        if (empty($_SESSION['email'])){
            echo "<script>alert('Faça o Login!!');location.href='login.php';</script>";
        } else{
            echo "Usuário Logado: ". htmlspecialchars($_SESSION['email']);
        }
        ?>
    </div>
    <h1>Área Administrativa</h1>
    
    <div class="cards">
        <div class="card" onclick="location.href='Fcliente.php'">
            <i class="fa-solid fa-user-plus"></i>
            <span>Cadastro Cliente</span>
        </div>
        <div class="card" onclick="location.href='cadusuario.php'">
            <i class="fa-solid fa-users"></i>
            <span>Cadastro Usuário</span>
        </div>
        <div class="card" onclick="location.href='cadnoticia.php'">
            <i class="fa-solid fa-newspaper"></i>
            <span>Cadastro Notícias</span>
        </div>
        <div class="card" onclick="location.href='cadfoto.php'">
            <i class="fa-solid fa-image"></i>
            <span>Cadastro Fotos</span>
        </div>
        <div class="card" onclick="location.href='exibefoto.php'">
            <i class="fa-solid fa-images"></i>
            <span>Ver Fotos</span>
        </div>
        <div class="card" onclick="location.href='listatabelaNot.php'">
            <i class="fa-solid fa-list"></i>
            <span>Lista Notícias</span>
        </div>
        <div class="card" onclick="location.href='listatabelacli.php'">
            <i class="fa-solid fa-list-check"></i>
            <span>Lista Clientes</span>
        </div>
        <div class="card" onclick="location.href='listatabelausu.php'">
            <i class="fa-solid fa-user"></i>
            <span>Lista Usuários</span>
        </div>
        <div class="card" onclick="location.href='usuario.php?funcao=logoff'">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Sair</span>
        </div>
    </div>
</div>

</body>
</html>