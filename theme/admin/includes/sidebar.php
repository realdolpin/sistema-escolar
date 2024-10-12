<aside class="menu-sidebar2">
  <div class="logo" style="background: #fff; border: 0">
    <a href="#" class="logo-admin">
      <img
        src="../assets/images/logo.png"
        alt="2"
      />
      <span>SGEDC</span>
    </a>
  </div>
  <div class="menu-sidebar2__content js-scrollbar1">
    <div class="account2">
      <div class="image img-120">
        <img
          src="../assets/_storage/<?= $_SESSION['foto'] ?>"
          alt="2"
          class="avatar-image"
        />
      </div>
      <h4 class="name"><?= $_SESSION['nome'] ?></h4>
      <a href="?logout=true">Terminar Sessão</a>
    </div>
    <nav class="navbar-sidebar2">
      <ul class="list-unstyled navbar__list">
        <li class="has-sub">
          <a class="js-arrow <?= $_GET['id'] === 'home'? 'active': '' ?>" href="index.php?id=home">
            <i class="fas fa-home"></i>Página Inicial
            <!-- <span class="inbox-num">3</span> -->
          </a>
        </li>
        <li class="">
          <a href="professores.php?id=professores" class="<?= $_GET['id'] === 'professores'? 'active': '' ?>">
            <i class="fas fa-file"></i>
            Professores
          </a>
        </li>
        <li class="">
          <a href="alunos.php?id=alunos" class="<?= $_GET['id'] === 'alunos'? 'active': '' ?>">
            <i class="fas fa-users"></i>Alunos
          </a>
        </li>
        <li class="">
          <a href="cursos.php?id=cursos" class="<?= $_GET['id'] === 'cursos'? 'active': '' ?>"> 
            <i class="fas fa-file"></i>
            Cursos
          </a>
        </li>
        <li class="">
          <a href="classes.php?id=classes" class="<?= $_GET['id'] === 'classes'? 'active': '' ?>">
            <i class="fas fa-file"></i>
            Classes
          </a>
        </li>
        <li class="">
          <a href="turmas.php?id=turmas" class="<?= $_GET['id'] === 'turmas'? 'active': '' ?>">
            <i class="fas fa-file"></i>
            Turmas
          </a>
        </li>
        <li class="">
          <a href="horario.php?id=horario" class="<?= $_GET['id'] === 'horario'? 'active': '' ?>">
            <i class="fas fa-file"></i>
            Horários
          </a>
        </li>
        <li class="">
          <a href="disciplinas.php?id=disciplinas" class="<?= $_GET['id'] === 'disciplinas'? 'active': '' ?>">
            <i class="fas fa-file"></i>
            Disciplinas
          </a>
        </li>
        <li class="">
          <a href="matriculas.php?id=matriculas" class="<?= $_GET['id'] === 'matriculas'? 'active': '' ?>">
            <i class="fas fa-file"></i>
            Matriculas
          </a>
        </li>
        <li class="has-sub">
          <a class="js-arrow" href="perfil.php?id=perfi" class="<?= $_GET['id'] === 'perfil'? 'active': '' ?>">
            <i class="fas fa-user-circle"></i>Meu Perfil
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>