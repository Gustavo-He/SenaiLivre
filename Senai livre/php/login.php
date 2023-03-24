<?php 
    include("conexao.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE email = :login AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue("login", $login);
        $stmt->bindValue("senha", $senha);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo "Logado com sucesso";
        }else{
            echo "Não possui cadastro";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/logo.css">
    <title>Login</title>
</head>
<body>
    
    <header>
        <img class="img" src="assets/img/logosenai.livre.png" alt="">

        <nav class="navegation">
            <a href="#">Sobre</a>
            <a href="#">Serviços</a>
            <a href="#">Contatos </a>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>


        <div class="form-box">
            <form method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="login" required>
                    <label> Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" required>
                    <label> Senha</label>
                </div>
                <div class="remenber-forgot">
                    <label><input type="checkbox">
                    Lembrar Senha</label>
                    <a href="#">Esqueceu sua senha?</a>
                </div>
                <button type="submit" class="btn"> Login</button>
                <div class="login-register">
                    <p>Não tem uma conta?<a href="#" class="register-link"> Registre-se</a></p>
                </div>
                
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>