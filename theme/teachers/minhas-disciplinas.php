  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  
  <?php
    $parametros = [":id" => $_SESSION['id']];
    $buscando = new Model();
    $buscandoMinhasDisciplinas = $buscando->EXE_QUERY("SELECT * FROM tb_disciplina_professor
    INNER JOIN tb_disciplina ON tb_disciplina_professor.disciplina_id=tb_disciplina.disciplina_id
    WHERE tb_disciplina_professor.professor_id=:id", $parametros);
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
                      <span class="au-breadcrumb-span">Minhas de Disciplinas</span>
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
                                  <th class="border-0">Disciplina</th>
                                  <th class="border-0">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php if($buscandoMinhasDisciplinas):?>
                              <?php foreach($buscandoMinhasDisciplinas as $details):?>
                              <tr class="border-0">
                                <td><?= $details['disciplina_id'] ?></td>
                                <td><?= $details['disciplina_nome'] ?></td>
                                <td>
                                  <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                </td>
                              </tr>
                              <?php endforeach;?>
                            <?php else:?>
                             <tr class="border-0">
                                <td colspan="12" class="border-0 text-center">Não existe nenhuma disciplina registrada</td>
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