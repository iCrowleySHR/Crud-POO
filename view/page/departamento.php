<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Departamento</title>
  <?php include '../layout/head.php' ?>
</head>
<body>
  <?php include '../../controller/exibeDepartamento.php'?>
  <header>
    <?php include '../layout/navbar.php' ?>
  </header>
  <main class="m-4 d-flex flex-column">
    <article style="max-width: 1200px;">
      <h3 class="fw-normal">Departamento</h3>

      <section>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Alteração</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($resultDepartamento) && count($resultDepartamento) > 0) { 
              foreach ($resultDepartamento as $value) {echo ' 
                <tr>
                  <th scope="row">'.$value['codDepartamento'].'</th>
                  <td>'.$value['nomeDepartamento'].'</td>
                  <td class="d-flex">
                    <form action="formEditDepartamento.php" method="get">
                      <button 
                        type="submit" 
                        name="cod"
                        class="btn btn-sm btn-warning me-2" 
                        data-bs-toggle="modal" 
                        data-bs-target="#formEdit" 
                        value="'.$value['codDepartamento'].'"
                      >
                      Editar
                    </button>
                  </form>
                  <form action="formDeleteDepartamento.php" method="get">
                    <button 
                      type="submit" 
                      name="cod"
                      class="btn btn-sm btn-danger" 
                      data-bs-toggle="modal" 
                      data-bs-target="#formDelete" 
                      value="'.$value['codDepartamento'].'"
                    >
                      Deletar
                    </button>
                  </form>
                </tr>
              ';
            }} else if (isset($resultDepartamento) && !$resultDepartamento) { echo '
              <section class="position-relative" style="max-width: 1200px;">
                <div class="alert alert-danger alert-dismissible fade show position-absolute w-100" role="alert">
                  <span>Nunhum departamento encontrado!</span>
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