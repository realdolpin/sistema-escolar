  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

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
                        >Cadastro de Disciplina</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="disciplinas.php?id=disciplinas" class="btn btn-primary">Lista disciplina</a>
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
                        <h4>Adicionar disciplina</h4>
                        <hr>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Disciplina <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome" 
                            class="form-control form-control-lg" 
                            placeholder="Digite a disciplina" 
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Carga Horária <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="carga" 
                            class="form-control form-control-lg" 
                            placeholder="Digite a carga horária" 
                          />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="adicionar_disciplina" class="form-control form-control-lg btn-primary">
                          Adicionar disciplina
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
