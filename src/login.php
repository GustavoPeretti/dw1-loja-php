<?php
    if (session_status() === PHP_SESSION_NONE) session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        if ($email === 'admin@loja.com' && $senha === '123456') {
            session_regenerate_id(true);

            $_SESSION['usuario'] = ['nome' => 'Admin', 'email' => $email];

            header('Location: painel.php');

            exit;
        }
        
        $erro = 'Credenciais inválidas';
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<form method="post">
  <fieldset>
    <input 
      name="email"
      placeholder="Login"
      aria-label="Login"
      autocomplete="username"
    />
    <input
      type="password"
      name="senha"
      placeholder="Password"
      aria-label="Password"
      autocomplete="current-password"
    />
    <input
      type="submit"
      value="Log in"
    />
  </fieldset>
</form>
</main>
