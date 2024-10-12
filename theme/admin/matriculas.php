  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $buscando = new Model();
    $buscandoMatricula = $buscando->EXE_QUERY("SELECT * FROM tb_matricula
    INNER JOIN tb_aluno ON tb_matricula.aluno_id=tb_aluno.aluno_id 
    INNER JOIN tb_turma ON tb_matricula.turma_id=tb_turma.turma_id ");
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
                      <span class="au-breadcrumb-span">Listagem de matricula</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="register-matricula.php?id=matriculas" class="btn btn-primary">Novo Matricula</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- MATRICULA -->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-25">
                <div class="card-body p-0 mt-3">
                  <!-- Tabela de Cursos -->
                  <div class="table-responsive">
                      <table class="table" id="dataCliente" >
                          <thead class="bg-light">
                              <tr class="border-0">
                                  <th class="border-0">#</th>
                                  <th class="border-0">Nome aluno</th>
                                  <th class="border-0">Turma</th>
                                  <th class="border-0">Ano lectivo</th>
                                  <th class="border-0">Data de Registro</th>
                                  <th class="border-0 text-center">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php if($buscandoMatricula):?>
                              <?php foreach($buscandoMatricula as $details):?>
                              <tr class="border-0">
                                <td><?= $details['matricula_id'] ?></td>
                                <td><?= $details['aluno_nome'] ?></td>
                                <td><?= $details['turma_nome'] ?></td>
                                <td><?= $details['ano_lectivo'] ?></td>
                                <td><?= $details['data_registro_matricula'] ?></td>
                                <td class="text-center">
                                  <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                  </a>
                                </td>
                              </tr>
                              <?php endforeach;?>
                            <?php else:?>
                             <tr class="border-0">
                                <td colspan="12" class="border-0 text-center">Não existe nenhuma matricula registrado</td>
                              </tr>
                            <?php endif;?>
                          </tbody>
                      </table>
                  </div>
                  <!-- Tabela de Cursos -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END MATRICULA -->

        <!-- END PAGE CONTAINER-->
      </div>
    </div>

    <!-- FOOTER -->
    <?php require 'includes/footer.php' ?>
    <!-- END FOOTER -->
  </body>
</html>
<!-- end document-->
