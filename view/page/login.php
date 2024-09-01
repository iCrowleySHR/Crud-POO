<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Crud POO | Login</title>
    <?php include '../layout/head.php' ?>
</head>

<body>
    <header>
        <?php include '../layout/navbar.php' ?>
    </header>
    <main class="container mt-5">
        <h2>Faça login para acessar o sistema</h2>
        <form style="max-width: 550px;width:100%;" class="d-flex flex-column">
            <div class="mb-3">
                <label for="email" class="form-label">Digite o seu email:</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Digite sua senha:</label>
                <input type="password"name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    <?php include '../layout/footer.php' ?>
</body>

</html>