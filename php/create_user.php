<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $conn = new mysqli("localhost", "root", "", "burst");

    // Verificar conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Obter dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);

    // Inserir usuário no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    
    // Usando prepared statement para evitar injeção de SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha);
    
    if ($stmt->execute()) {
        $success_message = "Usuário criado com sucesso!";
    } else {
        $error_message = "Erro ao criar usuário: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burst</title>

    <!-- IconScout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/login.css" />
</head>
<body>

    <div class="wrapper">
        <form action="create_user.php" method="post">
            <h1>Cadastrar</h1>
            <div class="input-box">
                <input name="nome" for="nome" type="text" placeholder="Nome" required>
                <i class="uil uil-user"></i>
            </div>
            <div class="input-box">
                <input name="email" for="email" type="text" placeholder="E-mail" required>
                <i class="uil uil-envelope"></i>
            </div>
            <div class="input-box">
                <input name="senha" for="senha" type="password" placeholder="Senha" required>
                <i class="uil uil-lock"></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Lembrar</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <button type="submit" value="Cadastrar" class="btn">Cadastrar</button>

            <div class="register-link">
                <p>Já tem conta? <a href="login.php">Logar</a></p>
            </div>
        </form>
    </div>

    <!-- Adicione esta parte no final do seu arquivo HTML, dentro da tag <body> -->
    <script>
        <?php
        // Adicione o seguinte código PHP para imprimir um alerta JavaScript se houver um $success_message ou $error_message
        if (isset($success_message)) {
            echo "alert('$success_message');";
        } elseif (isset($error_message)) {
            echo "alert('$error_message');";
        }
        ?>
    </script>

</body>
</html>
