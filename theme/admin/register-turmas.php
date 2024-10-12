  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  
  <?php 
    $buscando = new Model();
    $buscandoClasse = $buscando->EXE_QUERY("SELECT * FROM tb_classe");
    $buscandoCurso  = $buscando->EXE_QUERY("SELECT * FROM tb_curso");
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
                        >Cadastro de turma</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="turmas.php?id=turmas" class="btn btn-primary">Lista turma</a>
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
                        <h4>Adicionar turma</h4>
                        <hr>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="">Nome da Turma <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome" 
                            class="form-control form-control-lg" 
                            placeholder="Digite nome da turma" 
                          />
                        </div>
                      </div>
                     
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Classe e Turma <span class="text-danger">*</span></label>
                          <select name="classe" class="form-control form-control-lg">
                            <option value="">Selecione a classe</option>
                            <?php foreach($buscandoClasse as $details):?>
                            <option value="<?= $details['classe_id'] ?>">
                              <?= $details['classe_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Curso <span class="text-danger">*</span></label>
                          <select name="curso" class="form-control form-control-lg">
                            <option value="">Selecione o curso</option>
                            <?php foreach($buscandoCurso as $details):?>
                            <option value="<?= $details['curso_id'] ?>">
                              <?= $details['curso_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="adicionar_turma" class="form-control form-control-lg btn-primary">
                          Adicionar turma
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
