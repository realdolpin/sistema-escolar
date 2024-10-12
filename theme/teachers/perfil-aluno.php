  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $parametros = [":id" => $_GET['id']];
    $buscando = new Model();
    $buscandoPerfilAluno = $buscando->EXE_QUERY("SELECT * FROM tb_aluno
     INNER JOIN tb_matricula ON tb_aluno.aluno_id = tb_matricula.aluno_id 
     INNER JOIN tb_classe ON tb_aluno.classe_id = tb_classe.classe_id 
     INNER JOIN tb_curso ON tb_aluno.curso_id=tb_curso.curso_id
     WHERE tb_aluno.aluno_id=:id", $parametros);

    foreach($buscandoPerfilAluno as $details):
      $alunoId        = $details['aluno_id'];
      $alunoNome      = $details['aluno_nome'];
      $alunoGenero    = $details['aluno_genero'];
      $alunoEmail     = $details['aluno_email'];
      $dataNascimento = $details['aluno_data_nascimento'];
      $alunoTelefone  = $details['aluno_telefone'];
      $alunoFoto      = $details['aluno_foto_passe'];
      $documentoBI    = $details['aluno_num_documento'];
      $nacionalidade  = $details['aluno_nacionalidade'];
      $classe         = $details['classe_nome'];
      $curso          = $details['curso_nome'];
    endforeach;
  
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
                      <span class="au-breadcrumb-span">Nome do Aluno <strong><?= $alunoNome ?></strong></span>
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
                  <!-- PERFIL DO ALUNO -->
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="p-4">
                        <h1>Perfil do Aluno</h1>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <!-- Listagem de todos os dados do aluno -->
                      <!-- Listagem de todos os dados do aluno -->
                    </div>
                  </div>
                  <!-- PERFIL DO ALUNO -->
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
