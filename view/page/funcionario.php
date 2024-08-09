<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcionário</title>
  <?php include '../layout/head.php' ?>
</head>
<body>
  <?php include '../../controller/exibeFuncionario.php'?>
  <header>
    <?php include '../layout/navbar.php' ?>
  </header>
  <main class="m-4 d-flex flex-column">
    <article style="max-width: 1200px;">
      <h3 class="fw-normal">Funcionario</h3>
      <section>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Cpf</th>
              <th scope="col">Telefone</th>
              <th scope="col">Endereco</th>
              <th scope="col">Departamento</th>
              <th scope="col">Cargo</th>
              <th scope="col">Alteração</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($result) && count($result) > 0) { 
              foreach ($result as $value) {echo ' 
                <tr>
                  <th scope="row">'.$value['funcional'].'</th>
                  <td>'.$value['nome'].'</td>
                  <td>'.$value['cpf'].'</td>
                  <td>'.$value['telefone'].'</td>
                  <td>'.$value['endereco'].'</td>
                  <td>'.$value['created_at'].'</td>
                  <td>'.$value['nomeDepartamento'].'</td>
                  <td>'.$value['nomeCargo'].'</td>
                  <td class="d-flex">
                    <form action="formEditFuncionario.php" method="get">
                      <button 
                        type="submit" 
                        name="cod"
                        class="btn btn-sm btn-warning me-2" 
                        data-bs-toggle="modal" 
                        data-bs-target="#formEdit" 
                        value="'.$value['funcional'].'"
                      >
                        Editar
                      </button>
                    </form>
                    <form action="formDeleteFuncionario.php" method="get">
                      <button 
                        type="submit" 
                        name="cod"
                        class="btn btn-sm btn-danger" 
                        data-bs-toggle="modal" 
                        data-bs-target="#formDelete" 
                        value="'.$value['funcional'].'"
                      >
                        Deletar
                      </button>
                    </form>
                  </td>
                </tr>
              ';
            }} else if (isset($result) && !$result) { echo '
              <section class="position-relative" style="max-width: 1200px;">
                <div class="alert alert-danger alert-dismissible fade show position-absolute w-100" role="alert">
                  <span>Nunhum funcionário cadastrado!</span>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </section>
            '; } ?>
          </tbody>
        </table>
      </section>
    </article>
  </main>
  <?php include '../layout/footer.php' ?>
</body>
</html>