  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 

    $parametros = [":id" => $_SESSION['id']];
    $buscando = new Model();
    $buscandoTrimestre  = $buscando->EXE_QUERY("SELECT * FROM tb_trimestre");
    $buscandoMinhasDisciplinas = $buscando->EXE_QUERY("SELECT * FROM tb_disciplina_professor
    INNER JOIN tb_disciplina ON tb_disciplina_professor.disciplina_id=tb_disciplina.disciplina_id
    WHERE tb_disciplina_professor.professor_id=:id", $parametros);

    $parametros = [
      ":turma" => $_GET['turma'],
      ":id"    => $_SESSION['id']
    ];
    $buscandoMeusAlunos = $buscando->EXE_QUERY("SELECT * FROM tb_turma_professor
    INNER JOIN tb_matricula ON tb_turma_professor.turma_id=tb_matricula.turma_id
    INNER JOIN tb_turma ON tb_matricula.turma_id=tb_turma.turma_id 
    INNER JOIN tb_aluno ON tb_matricula.aluno_id=tb_aluno.aluno_id
    WHERE tb_turma_professor.professor_id=:id and tb_turma_professor.turma_id=:turma", $parametros);
      
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
                        >Cadastra Nota de por turma</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="notas.php?id=notas" class="btn btn-primary">Lista nota</a>
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
                        <h4>Turma selecionada <strong><?= $_GET['nomeTurma'] ?></strong></h4>
                        <hr>
                      </div>
                      
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Aluno <span class="text-danger">*</span></label>
                          <select name="aluno" class="form-control form-control-lg">
                            <option value="">Selecione o aluno</option>
                            <?php foreach($buscandoMeusAlunos as $details):?>
                            <option value="<?= $details['aluno_id'] ?>">
                              <?= $details['aluno_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                     
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Disciplina <span class="text-danger">*</span></label>
                          <select name="disciplina" class="form-control form-control-lg">
                            <option value="">Selecione a disciplina</option>
                            <?php foreach($buscandoMinhasDisciplinas as $details):?>
                            <option value="<?= $details['disciplina_id'] ?>">
                              <?= $details['disciplina_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Trimestre <span class="text-danger">*</span></label>
                          <select name="trimestre" class="form-control form-control-lg">
                            <option value="">Selecione o curso</option>
                            <?php foreach($buscandoTrimestre as $details):?>
                            <option value="<?= $details['trimestre_id'] ?>">
                              <?= $details['trimestre_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Prof(a)</label>
                          <input type="text" value="<?= $_SESSION['nome'] ?>" disabled class="form-control form-control-lg" name="nota" />
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="form-group">
                          <label for="">Nota <span class="text-danger">*</span></label>
                          <input type="number" class="form-control form-control-lg" name="nota" />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="adicionar_nota" class="form-control form-control-lg btn-primary">
                          Adicionar nota
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
    <?php require '../../source/controller/RegisterProfessor.php' ?>
    <!-- END FOOTER -->
  </body>
</html>
<!-- end document-->
