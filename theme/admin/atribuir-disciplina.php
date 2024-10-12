  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $parametros = [":id" => $_GET['professorId']];
    $buscando = new Model();
    $buscandoDadosProfessor = $buscando->EXE_QUERY("SELECT * FROM tb_professor WHERE professor_id=:id", 
    $parametros);

    $buscandoDisciplina = $buscando->EXE_QUERY("SELECT * FROM tb_disciplina");
    $buscandoTurma      = $buscando->EXE_QUERY("SELECT * FROM tb_turma
    INNER JOIN tb_classe ON tb_turma.classe_id=tb_classe.classe_id
    ");

    foreach($buscandoDadosProfessor as $details):
      $nomeProfessor = $details['professor_nome'];
    endforeach; 
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

        <section class="au-breadcrumb m-t-75" style="background: #f1f1f1">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                      <span class="au-breadcrumb-span"
                        >Atribuir de Disciplina</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="disciplinas.php?id=disciplinas" class="btn btn-primary">Lista disciplina</a>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- PROFESSOR-->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">

              <!-- ATRIBUIR DISCIPLINA -->
              <div class="row m-t-25">
                <div class="card-body p-0 mt-3">
                  <form method="POST" class="p-4 bg-white" style="background: #fafafa !important" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-12">
                        <span>Atribuir disciplina para <strong><?= $nomeProfessor ?></strong></span>
                        <hr>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Professor(a) <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome"
                            disabled
                            value="<?= $nomeProfessor ?>" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Disciplina <span class="text-danger">*</span></label>
                          <select name="disciplina" class="form-control form-control-lg">
                            <option value="">Selecione a disciplina</option>
                            <?php foreach($buscandoDisciplina as $details):?>
                            <option value="<?= $details['disciplina_id'] ?>">
                              <?= $details['disciplina_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="atribuir_disciplina" class="form-control form-control-lg btn-primary">
                          Atribuir disciplina
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- ATRIBUIR DISCIPLINA -->

              <!-- ATRIBUIR TURMA -->
              <div class="row m-t-25">
                <div class="card-body p-0 mt-3">
                  <form method="POST" class="p-4 bg-white" style="background: #fafafa !important" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-12">
                        <span>Atribuir turma para <strong><?= $nomeProfessor ?></strong></span>
                        <hr>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Professor(a) <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome"
                            disabled
                            value="<?= $nomeProfessor ?>" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Turma <span class="text-danger">*</span></label>
                          <select name="turma" class="form-control form-control-lg">
                            <option value="">Selecione a turma</option>
                            <?php foreach($buscandoTurma as $details):?>
                            <option value="<?= $details['turma_id'] ?>">
                              <?= $details['turma_nome'] ?> - <?= $details['classe_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="atribuir_turma" class="form-control form-control-lg btn-primary">
                          Atribuir turma
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- ATRIBUIR TURMA -->


            </div>
          </div>
        </section>
        <!-- END PROFESSOR-->

        <!-- END PAGE CONTAINER-->
      </div>
    </div>

    <!-- FOOTER -->
    <?php require 'includes/footer.php' ?>
    <?php require '../../source/controller/RegisterAdmin.php' ?>
    <!-- END FOOTER -->
  </body>
</html>
<!-- end document-->
