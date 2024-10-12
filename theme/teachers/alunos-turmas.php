  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

<?php
    $parametros = [
      ":id" => $_SESSION['id'],
      ":turma" => $_GET['turma']
    ];
    $buscando = new Model();
    $buscandoTurmaAlunos = $buscando->EXE_QUERY("SELECT * FROM tb_turma_professor
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
                      <span class="au-breadcrumb-span">Lista de Estudantes da Turma <strong><?= $_GET['nomeTurma'] ?></strong></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- HOTEL-->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-25">
                <div class="card-body p-0 mt-3">
                  <!-- Tabela de DISCIPLINAS -->
                  <div class="table-responsive">
                      <table class="table" id="dataCliente" >
                          <thead class="bg-light">
                              <tr class="border-0">
                                  <th class="border-0">#</th>
                                  <th class="border-0">Nome</th>
                                  <th class="border-0">Data de Nascimento</th>
                                  <th class="border-0">Genero</th>
                                  <th class="border-0">Nacionalidade</th>
                                  <th class="border-0">Encarregado</th>
                                  <th class="border-0">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php if($buscandoTurmaAlunos):?>
                              <?php foreach($buscandoTurmaAlunos as $details):?>
                              <tr class="border-0">
                                <td><?= $details['aluno_id'] ?></td>
                                <td><?= $details['aluno_nome'] ?></td>
                                <td><?= $details['aluno_data_nascimento'] ?></td>
                                <td><?= $details['aluno_genero'] === "M" ? "Masculino": "Femenino" ?></td>
                                <td><?= $details['aluno_nacionalidade'] ?></td>
                                <td><?= $details['aluno_encarregado_nome'] ?></td>
                                <td>
                                  <a href="perfil-aluno.php?id=<?= $details['aluno_id'] ?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                </td>
                              </tr>
                              <?php endforeach;?>
                            <?php else:?>
                             <tr class="border-0">
                                <td colspan="12" class="border-0 text-center">Não existe nenhum aluno nesta turma</td>
                              </tr>
                            <?php endif;?>
                          </tbody>
                      </table>
                  </div>
                  <!-- Tabela de DISCIPLINAS -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END HOTEL-->

        <!-- END PAGE CONTAINER-->
      </div>
    </div>

    <!-- FOOTER -->
    <?php require 'includes/footer.php' ?>
    <!-- END FOOTER -->
  </body>
</html>
<!-- end document-->
