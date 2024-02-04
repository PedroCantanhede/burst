<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = new mysqli("localhost", "root", "", "burst");

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["senha"];

        if (password_verify($senha, $hashed_password)) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_nome"] = $row["nome"];
            header("Location: ../index.php"); 
            exit(); 
        } else {
            $error_message = "Senha incorreta.";
        }
    } else {
        $error_message = "E-mail não encontrado.";
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
        <form action="login.php" method="post">
            <h1>Login</h1>
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

            <button type="submit" value="Login" class="btn">Login</button>

            <div class="register-link">
                <p>Não tem uma conta? <a href="create_user.php">Registrar</a></p>
            </div>
        </form>
    </div>

    <script>
        <?php
        if (isset($error_message)) {
            echo "alert('$error_message');";
        }
        ?>
    </script>

</body>
</html>
