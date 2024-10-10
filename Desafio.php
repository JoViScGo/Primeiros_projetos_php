<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio</title>
    <style>
        .masculino{
            background-color: green;
            color: white;
        }
        .feminino{
            background-color: orange;
            color: white;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br><br>
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = intval($_POST["idade"]);
        $sexo = htmlspecialchars($_POST["sexo"]);

        if ($idade >= 18) {
            if ($sexo == "masculino") {
                echo "<div class='masculino'>Nome: $nome<br>Idade: $idade<br>Sexo: $sexo</div>";
            } elseif ($sexo == "feminino") {
                echo "<div class='feminino'>Nome: $nome<br>Idade: $idade<br>Sexo: $sexo</div>";
            }
        } else {
            echo "<p>Usuário menor de idade.</p>";
        }
    }
    ?>
</body>
</html>
