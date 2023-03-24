<?php
    include("../config/cabecalho.php");
?>

<form action="" method="POST">
    <label for="login">Login</label>
    <input type="text" name="login" id="login" placeholder="informe seu login" required>

    <label for="senha">Senha</label>
    <input type="paassword" name="Senha" id="senha" placeholder="informe sua senha" required>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
</form>

<?php 
    include("../conexao.php");
?>


<?php
    include("../config/rodape.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "";
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