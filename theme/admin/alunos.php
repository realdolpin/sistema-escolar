  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $buscando = new Model();
    $buscandoAlunoDados = $buscando->EXE_QUERY("SELECT * FROM tb_aluno
    INNER JOIN tb_classe ON tb_aluno.classe_id=tb_classe.classe_id 
    INNER JOIN tb_curso ON tb_aluno.curso_id=tb_curso.curso_id
    ");
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
                        >Listagem de Alunos</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="register-alunos.php?id=alunos" class="btn btn-primary">Novo Aluno</a>
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
                  <!-- Tabela de Alunos -->
                  <div class="table-responsive">
                      <table class="table" id="dataCliente" >
                          <thead class="bg-light">
                              <tr class="border-0">
                                  <th class="border-0">#</th>
                                  <th class="border-0">Nome do aluno</th>
                                  <th class="border-0">Genero</th>
                                  <th class="border-0">Data de Nascimento</th>
                                  <th class="border-0">Telefone</th>
                                  <th class="border-0">Classe</th>
                                  <th class="border-0">Curso</th>
                                  <th class="border-0 text-center">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php if($buscandoAlunoDados):?>
                              <?php foreach($buscandoAlunoDados as $details):?>
                              <tr class="border-0">
                                <td><?= $details['aluno_id'] ?></td>
                                <td><?= $details['aluno_nome'] ?></td>
                                <td><?= $details['aluno_genero'] === "M" ? "Masculino": "Femenino" ?></td>
                                <td><?= $details['aluno_data_nascimento'] ?></td>
                                <td><?= $details['aluno_telefone'] ?></td>
                                <td><?= $details['classe_nome'] ?></td>
                                <td><?= $details['curso_nome'] ?></td>
                                <td>
                                  <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                  </a>
                                </td>
                              </tr>
                              <?php endforeach;?>
                            <?php else:?>
                             <tr class="border-0">
                                <td colspan="12" class="border-0 text-center">Não existe nenhum aluno registrado</td>
                              </tr>
                            <?php endif;?>
                          </tbody>
                      </table>
                  </div>
                  <!-- Tabela de Alunos -->
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
