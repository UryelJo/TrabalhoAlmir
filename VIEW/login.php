<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/shared.css">
</head>
<body>
    
    <h1 style="font-si">Gerenciador de Mangás</h1>
    <form 
    method="post" 
    action="" 
    class="card col align-center"
    >
        <h2>Login</h2>

        <div class="col">
            <label for="input-email">Email</label>
            <input id="input-email" name="input-email" type="email">
        </div>

        <div class="col">
            <label for="input-senha">Senha</label>
            <input id="input-senha" name="input-senha" type="password">
        </div>

        <button
        class="button"
        type="submit"
        > Logar </button>      

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['input-senha']) && isset($_POST['input-email'])) {
            $senha = $_POST['input-senha'];
            $email = $_POST['input-email'];
        }
        ?>


    </form>
</body>
</html>

