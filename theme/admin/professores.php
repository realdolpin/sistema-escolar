  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $buscandoProfessores = new Model();
    $buscando = $buscandoProfessores->EXE_QUERY("SELECT * FROM tb_professor");
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
                        >Listagem de Professores</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="register-professor.php?id=professores" class="btn btn-primary">Novo Professor</a>
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
                  <!-- Tabela de Clientes -->
                  <div class="table-responsive">
                      <table class="table" id="dataCliente" >
                          <thead class="bg-light">
                              <tr class="border-0">
                                  <th class="border-0">#</th>
                                  <th class="border-0">Nome do Professor</th>
                                  <th class="border-0">B.I</th>
                                  <th class="border-0">Genero</th>
                                  <th class="border-0">Foto</th>
                                  <th class="border-0 text-center">Acções</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php if($buscando):?>
                              <?php foreach($buscando as $details):?>
                              <tr class="border-0">
                                <td><?= $details['professor_id'] ?></td>
                                <td><?= $details['professor_nome'] ?></td>
                                <td><?= $details['professor_bi'] ?></td>
                                <td><?= $details['professor_genero'] === "M" ? "Masculino": "Femenino" ?></td>
                                <td>
                                  <object data="../assets/_storage/<?= $details['professor_foto'] ?>" type="application/x-pdf" title="Comprovativo">
                                    <a href="../assets/_storage/<?= $details['professor_foto'] ?>" class="text-dark" target="_blank">
                                      <p class="text-success">
                                        Abrir
                                      </p>
                                    </a>
                                  </object>
                                </td>
                                <td>
                                  <a href="atribuir-disciplina.php?professorId=<?= $details['professor_id'] ?>&id=professores" class="btn btn-success btn-sm">
                                    <i class="fa fa-file"></i>
                                  </a>
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
                                <td colspan="12" class="border-0 text-center">Não existe nenhum professor registrado</td>
                              </tr>
                            <?php endif;?>
                          </tbody>
                      </table>
                  </div>
                  <!-- Tabela de Clientes -->
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
