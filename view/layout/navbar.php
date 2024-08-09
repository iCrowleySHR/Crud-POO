<nav class="navbar navbar-expand-lg bg-dark-subtle shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= URL ?>/">Atividade POO</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cargo</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= URL ?>/view/page/cargo.php">Buscar</a></li>
              <li><a class="dropdown-item" href="<?= URL ?>/view/page/formCargo.php">Cadastrar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Departamento</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= URL ?>/view/page/departamento.php">Buscar</a></li>
              <li><a class="dropdown-item" href="<?= URL ?>/view/page/formDepartamento.php">Cadastrar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Funcionario</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= URL ?>/view/page/funcionario.php">Buscar</a></li>
              <li><a class="dropdown-item" href="<?= URL ?>/view/page/formFuncionario.php">Cadastrar</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
</nav>