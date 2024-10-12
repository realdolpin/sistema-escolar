  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $buscando = new Model();
    $buscandoDisciplinas = $buscando->EXE_QUERY("SELECT * FROM tb_disciplina");
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
                        >Cadastro de Professores</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="professores.php?id=professores" class="btn btn-primary">Lista Professor</a>
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
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto <span class="text-danger">*</span></label>
                          <input 
                            type="file" 
                            name="foto" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Nome do Professor <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o e-mail do professor"  
                          />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">E-mail do Professor <span class="text-danger">*</span></label>
                          <input 
                            type="email" 
                            name="email" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o e-mail do professor" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Nº BI do Professor <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="bi" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o e-mail do professor" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-8">
                        <div class="form-group">
                          <label for="">Selecione a Genero <span class="text-danger">*</span></label>
                          <select name="genero" class="form-control form-control-lg">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <button type="submit" name="adicionar_professor" class="form-control form-control-lg btn-primary">Adicionar Professor</button>
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
    <!-- END FOOTER -->
    <?php require '../../source/controller/RegisterAdmin.php' ?>
  </body>
</html>
<!-- end document-->
