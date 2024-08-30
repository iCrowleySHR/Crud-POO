<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Funcionário</title>
    <?php include '../layout/head.php' ?>
    <?php include '../../controller/DateFormatter.php' ?>
    <link rel="stylesheet" href="../css/relatorio.css">
</head>

<body>
    <header>
        <?php include '../layout/navbar.php' ?>
    </header>
    <?php require_once '../../controller/relatorioFuncionario.php'; ?>
    <main class="container">
        <?php foreach ($value as $user) { ?>
            <div class="report">
                <div class="report-details">
                    <img src="<?= URL . "/view/img/funcionario/" . $user['image_url'] ?>" style="border-radius:13px;" alt="foto do funcionario" />
                    <div>
                        <div><label>Nome:</label> <?php echo $user['nome']; ?></div>
                        <div><label>CPF:</label> <?php echo $user['cpf']; ?></div>
                        <div><label>Telefone:</label> <?php echo ($user['telefone']); ?></div>
                        <div><label>Endereço:</label> <?php echo $user['endereco']; ?></div>
                        <div><label>Cargo:</label> <?php echo $user['nomeCargo']; ?></div>
                        <div><label>Departamento:</label> <?php echo $user['nomeDepartamento']; ?></div>
                        <div><label>Salário:</label> R$ <?php echo number_format((float)$user['salario'], 2, ',', '.'); ?></div>
                        <div><label>Data de Criação:</label> <?= DateFormatter::format($user['created_at']) ?></div>
                        <div><label>Última Atualização:</label> <?= empty($user['updated_at']) ? 'Nunca alterado' : DateFormatter::format($user['updated_at']) ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </main>
    <?php include '../layout/footer.php' ?>
</body>

</html>