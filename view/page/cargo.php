<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargo</title>
  <?php include '../layout/head.php' ?>
</head>
<body>
  <?php include '../../controller/exibeCargo.php'?>
  <header>
    <?php include '../layout/navbar.php' ?>
  </header>
  <main class="m-4 d-flex flex-column">
    <article style="max-width: 1200px;">
      <h3 class="fw-normal">Cargo</h3>

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
            <?php if (isset($resultCargo) && count($resultCargo) > 0) { 
              foreach ($resultCargo as $value) {echo ' 
                <tr>
                  <th scope="row">'.$value['codCargo'].'</th>
                  <td>'.$value['nomeCargo'].'</td>
                  <td class="d-flex">
                    <form action="formEditCargo.php" method="get">
                      <button 
                        type="submit" 
                        name="cod"
                        class="btn btn-sm btn-warning me-2" 
                        data-bs-toggle="modal" 
                        data-bs-target="#formEdit" 
                        value="'.$value['codCargo'].'"
                      >
                        Editar
                      </button>
                    </form>
                    <form action="formDeleteCargo.php" method="get">
                      <button 
                        type="submit" 
                        name="cod"
                        class="btn btn-sm btn-danger" 
                        data-bs-toggle="modal" 
                        data-bs-target="#formDelete" 
                        value="'.$value['codCargo'].'"
                      >
                        Deletar
                      </button>
                    </form>
                  </td>
                </tr>
              ';
            }} else if (isset($resultCargo) && !$resultCargo) { echo '
              <section class="position-relative" style="max-width: 1200px;">
                <div class="alert alert-danger alert-dismissible fade show position-absolute w-100" role="alert">
                  <span>Nunhum cargo encontrado!</span>
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