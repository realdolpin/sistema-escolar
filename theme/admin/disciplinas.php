  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->
  
  <?php 
    $buscando = new Model();
    $buscandoDisciplina = $buscando->EXE_QUERY("SELECT * FROM tb_disciplina");
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
                        >Listagem de Disciplina</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="register-disciplinas.php?id=disciplinas" class="btn btn-primary">Novo Disciplina</a>
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
                                  <th class="border-0">Disciplina</th>
                                  <th class="border-0">Carga Horária</th>
                                  <th class="border-0 text-center">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php if($buscandoDisciplina):?>
                              <?php foreach($buscandoDisciplina as $details):?>
                              <tr class="border-0">
                                <td><?= $details['disciplina_id'] ?></td>
                                <td><?= $details['disciplina_nome'] ?></td>
                                <td><?= $details['disciplina_carga_horaria'] ?></td>
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
                                <td colspan="12" class="border-0 text-center">Não existe nenhuma disciplina registrada</td>
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
