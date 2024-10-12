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

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-75" style="background: #f1f1f1">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                      <span class="au-breadcrumb-span"
                        >Atualizar o meu Perfil</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- HOTEL-->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-25">
               
                <div class="col-lg-4">
                  <!-- Profile Admin -->
                  <?php
                    $parametros = [":id" => $_SESSION['id']];
                    $buscandoMeusDados = new Model();
                    $buscando = $buscandoMeusDados->EXE_QUERY("SELECT * FROM tb_admin WHERE id_admin=:id", $parametros);
                    foreach($buscando as $mostrar):
                      $nome = $mostrar['nome'];
                      $foto = $mostrar['foto'];
                      $email = $mostrar['email'];
                    endforeach;
                  ?>
                  <div class="card">
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" style="width: 120px; border-radius: 120px" src="../assets/images/icon/<?= $foto ?>" alt="<?= $nome ?> ">
                            <h5 class="text-sm-center mt-2 mb-1"><?= $nome ?></h5>
                            <div class="location text-sm-center">
                                <i class="fa fa-envelope"></i> <?= $email ?></div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            Administrador Geral
                        </div>
                    </div>
                  </div>
                  <!-- End Profile Admin -->
                </div>
                <div class="col-lg-8">
                  <form method="POST" enctype="multipart/form-data">
                    <?php 
                      $parametros = [":id" => $_SESSION['id']];
                      $pegandoMeuPerfil = new Model();
                      $pegando = $pegandoMeuPerfil->EXE_QUERY("SELECT * FROM tb_admin WHERE id_admin=:id", $parametros);
                      foreach($pegando as $mostrar):
                    ?>
                      <div class="row">
                        <div class="form-group col-lg-6">
                          <label for="#">Nome Completo</label>
                          <input type="text" value="<?= $mostrar['nome'] ?>" class="form-control" name="nome" />
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="#">E-mail</label>
                          <input type="email" value="<?= $mostrar['email'] ?>" class="form-control" name="email" />
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="#">Palavra-Passe</label>
                          <input type="password" class="form-control" name="senha" />
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="#">Foto</label>
                          <input type="file" class="form-control" name="foto" />
                        </div>
                      </div>
                    <?php
                    endforeach;?>
                    <div class="row">
                      <div class="form-group col-lg-4">
                        <input type="submit" name="atualizar_perfil" value="Atualizar" class="btn btn-primary form-control">
                      </div>
                    </div>

                    <!-- Atualizar Perfil -->
                    <?php 
                      if(isset($_POST['atualizar_perfil'])):
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $senha = $_POST['senha'] === '' ? $mostrar['senha'] : md5(md5($_POST['senha']));

                        $target        = "../assets/images/icon/" . basename($_FILES['foto']['name']);
                        $foto          = $_FILES['foto']['name'] === '' ? $mostrar['foto'] : $_FILES['foto']['name'];

                        $parametros = [
                          ":id"       => $_SESSION['id'],
                          ":nome"     => $nome, 
                          ":email"    => $email,
                          ":senha"    => $senha,
                          ":foto"     => $foto   
                        ];
    
                        $atualizarMeuPerfil = new Model();
                        $atualizarMeuPerfil->EXE_NON_QUERY("UPDATE tb_admin SET
                          nome=:nome,
                          email=:email,
                          senha=:senha,
                          foto=:foto
                          WHERE id_admin=:id
                         ", $parametros);
    
                         if($atualizarMeuPerfil):
                          if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) :
                            $sms = "Uploaded feito com sucesso";
                          else:
                              $sms = "Não foi possível fazer o upload";
                          endif;
                          echo '<script>
                                    swal({
                                      title: "Dados atualizados!",
                                      text: "Operação Efetuada com sucesso",
                                      icon: "success",
                                      button: "Fechar",
                                    })
                                </script>';
                            echo '<script>
                                setTimeout(function() {
                                   location.href="perfil.php?id=perfil";
                                }, 2000)
                            </script>';
                         endif;
                      endif;
                    ?>
                    <!-- Atualizar Perfil -->
                  </form>
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
