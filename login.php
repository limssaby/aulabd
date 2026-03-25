<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

<style>
/* --- ESTILO MILK UI --- */

/* Paleta */
:root {
  --bg: #e9d9f6; 
  --white: #ffffff;
  --accent: #c597ec;
  --hover: #b67de4;
  --texto: #4b3d56;
  --placeholder: #9f8bab;
}

/* Fundo suave */
body {
  margin: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--bg);
  font-family: 'Poppins', sans-serif;
}

/* Card do formulário */
form {
  background: var(--white);
  width: 350px;
  padding: 35px;
  border-radius: 30px;
  box-shadow: 0 8px 25px rgba(155, 92, 186, 0.20);
  display: flex;
  flex-direction: column;
  gap: 15px;
  text-align: center;
  animation: fadeIn .9s ease forwards;
}

/* Título */
h2 {
  margin: 0;
  color: var(--texto);
  font-weight: 600;
  font-size: 24px;
  letter-spacing: 0.5px;
}

/* Labels */
label {
  text-align: left;
  font-size: 14px;
  font-weight: 500;
  color: var(--texto);
}

/* Inputs */
input {
  width: 100%;
  padding: 12px 14px;
  border-radius: 18px;
  background: #f8f5fc;
  border: 2px solid transparent;
  font-size: 15px;
  margin-top: 5px;
  color: var(--texto);
  transition: .3s;
}

input::placeholder {
  color: var(--placeholder);
}

input:focus {
  border-color: var(--accent);
  outline: none;
  box-shadow: 0px 0px 12px rgba(155, 92, 186, .25);
}

/* Botões */
button {
  width: 100%;
  padding: 12px;
  border-radius: 20px;
  border: none;
  font-size: 15px;
  cursor: pointer;
  font-weight: 600;
  color: white;
  transition: 0.3s ease;
}

.btn-cadastrar {
  background: var(--accent);
}

.btn-cadastrar:hover {
  background: var(--hover);
  transform: scale(1.04);
}

.btn-limpar {
  background: #dabcf4;
  color: #4b3263;
}

.btn-limpar:hover {
  transform: scale(1.04);
}

/* Botões lado a lado */
.buttons {
  display: flex;
  gap: 10px;
}

/* Animação suave */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>

</head>
<body>

<form method="POST" action="usuario.php?funcao=logar">

    <h2>Bem-vinda ✨</h2>

    <label>E-mail</label>
    <input type="email" name="email" placeholder="ex: girl@mail.com">

    <label>Senha</label>
    <input type="password" name="senha" placeholder="********">

    <div class="buttons">
      <button type="submit" class="btn-cadastrar">Entrar</button>
      <button type="reset" class="btn-limpar">Limpar</button>
    </div>
    
</form>

</body>
</html>
