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
          <a href="index.php?id=home" class="<?= $_GET['id'] === 'home'? 'active': '' ?>">
            <i class="fas fa-home"></i>Página Inicial
          </a>
        </li>
        <li class="">
          <a href="minhas-turmas.php?id=turmas" class="<?= $_GET['id'] === 'turmas'? 'active': '' ?>">
            <i class="fas fa-address-book"></i>
            Minhas Turmas
          </a>
        </li>
        <li class="">
          <a href="minhas-disciplinas.php?id=disciplinas" class="<?= $_GET['id'] === 'disciplinas' ? 'active': '' ?>">
            <i class="fas fa-users"></i>Disciplinas
          </a>
        </li>
        <li class="">
          <a href="notas.php?id=notas" class="<?= $_GET['id'] === 'notas' ? 'active': '' ?>">
            <i class="fas fa-users"></i>
            Avaliação de Notas
          </a>
        </li>
        <li class="has-sub">
          <a href="perfil.php?id=perfil" class="<?= $_GET['id'] === 'perfil'? 'active': '' ?>">
            <i class="fas fa-user-circle"></i>Meu Perfil
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>