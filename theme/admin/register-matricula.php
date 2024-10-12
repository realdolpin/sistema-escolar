  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $buscando = new Model();
    $buscandoAluno = $buscando->EXE_QUERY("SELECT * FROM tb_aluno");
    $buscandoTurma = $buscando->EXE_QUERY("SELECT * FROM tb_turma
    INNER JOIN tb_classe ON tb_turma.classe_id=tb_classe.classe_id");
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
                      <span class="au-breadcrumb-span">Cadastro de Matricula</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="matriculas.php?id=matriculas" class="btn btn-primary">Lista Matricula</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- PROFESSOR-->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-25">
                <div class="card-body p-0 mt-3">
                  <form method="POST" class="p-4 bg-white" style="background: #fafafa !important" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4>Adicionar Matricula</h4>
                        <hr>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Aluno <span class="text-danger">*</span></label>
                          <select name="aluno" class="form-control form-control-lg">
                            <option value="">Selecione o aluno</option>
                            <?php foreach($buscandoAluno as $details):?>
                            <option value="<?= $details['aluno_id'] ?>">
                              <?= $details['aluno_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4">
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

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Ano lectivo <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="ano"
                            disabled
                            value="2022/2023" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="adicionar_matricula" class="form-control form-control-lg btn-primary">
                          Adicionar Matricula
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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
