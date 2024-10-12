  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php
    $parametros = [":id" => $_SESSION['id']];
    $buscando             = new Model();
    $buscandoNota         = $buscando->EXE_QUERY("SELECT * FROM tb_nota
    INNER JOIN tb_professor  ON tb_professor.professor_id=tb_nota.professor_id 
    INNER JOIN tb_disciplina ON tb_nota.disciplina_id=tb_disciplina.disciplina_id 
    INNER JOIN tb_trimestre  ON tb_nota.trimestre_id=tb_trimestre.trimestre_id 
    INNER JOIN tb_aluno      ON tb_nota.aluno_id=tb_aluno.aluno_id
    WHERE tb_nota.professor_id=:id", $parametros);
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
                      <span class="au-breadcrumb-span">Listagem das avaliações</span>
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
                                  <th class="border-0">Nome Aluno</th>
                                  <th class="border-0">Disciplina</th>
                                  <th class="border-0">Trimeste</th>
                                  <th class="border-0">Nota</th>
                                  <th class="border-0 text-center">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php if($buscandoNota):?>
                              <?php foreach($buscandoNota as $details):?>
                              <tr class="border-0">
                                <td><?= $details['nota_id'] ?></td>
                                <td><?= $details['aluno_nome'] ?></td>
                                <td><?= $details['disciplina_nome'] ?></td>
                                <td><?= $details['trimestre_nome'] ?></td>
                                <td><?= $details['nota'] ?></td>
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
                                <td colspan="12" class="border-0 text-center">Não existe nenhuma nota registrada</td>
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
