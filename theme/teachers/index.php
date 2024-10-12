  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  
  <?php
    $parametros = [":id" => $_SESSION['id']];
    $buscandoTurmas = new Model();
    $buscandoMinhasTurmas = $buscandoTurmas->EXE_QUERY("SELECT * FROM tb_turma_professor
    INNER JOIN tb_turma ON tb_turma_professor.turma_id=tb_turma.turma_id
    WHERE tb_turma_professor.professor_id=:id", $parametros);
  ?>

  <body class="animsition">
    <div class="page-wrapper" style="background: white">
      <!-- MENU SIDEBAR-->
      <?php require 'includes/sidebar.php' ?>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container2" style="background: white">
        <!-- HEADER DESKTOP-->
        <?php require 'includes/header.php' ?>
        <!-- END HEADER DESKTOP-->

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-75" style="background: #f1f1f1">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                      <span class="au-breadcrumb-span"
                        >Painel do Professor</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <span class="au-breadcrumb-span"
                    >Seja bem-vindo: Prof(a) <strong><?= $_SESSION['nome'] ?></strong></span
                  >
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- ESTATISTICA-->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-25">
              <div class="col-lg-12 col-xl-12">
                  <div class="card border-0">
                    <div>
                      <h4>Minhas Turmas</h4>
                    </div>
                  </div>
                </div>


                <?php if($buscandoMinhasTurmas): ?>
                  <?php foreach($buscandoMinhasTurmas as $details): ?>
                  <div class="col-lg-12 col-xl-12">
                    <div class="card border-0">
                      <div class="p-4" style="background: #fafafa !important; border: 0 !important;">
                        <div class="row">
                          <div class="col-lg-1">
                            <div class="icon-turma">
                              <i class="fas fa-users"></i>
                            </div>
                          </div>
                          <div class="col-lg-9">
                            <h4>Turma <?= $details['turma_nome'] ?></h4>
                            <p>Para visualizares mais informações sobre a turma</p>
                          </div>
                          <div class="col-lg-2 text-right">
                            <a href="alunos-turmas.php?id=turmas&turma=<?= $details['turma_id'] ?>&nomeTurma=<?= $details['turma_nome'] ?>" class="btn btn-primary">Ver mais</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="col-lg-12 col-xl-12">
                    <p class="p-4">Não existe turma para ti...</p>
                  </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </section>
        <!-- END ESTATISTICA-->

        <!-- END PAGE CONTAINER-->
      </div>
    </div>

    <!-- FOOTER -->
    <?php require 'includes/footer.php' ?>
    <!-- END FOOTER -->
  </body>
</html>
<!-- end document-->
