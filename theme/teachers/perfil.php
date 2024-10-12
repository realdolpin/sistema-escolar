  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $parametros = [":id" => $_SESSION['id']];
    $buscando = new Model();
    $buscandoPerfil = $buscando->EXE_QUERY("SELECT * FROM tb_professor WHERE professor_id=:id", $parametros);
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
                <div class="col-lg-12">
                  <form method="POST" enctype="multipart/form-data" class="p-4" style="background: #fafafa">
                      <div class="row">

                        <?php foreach($buscandoPerfil as $mostrar): ?>
                          <div class="form-group col-lg-6">
                            <label for="#">Nome Completo</label>
                            <input type="text" value="<?= $mostrar['professor_nome'] ?>" class="form-control form-control-lg" name="nome" />
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="#">E-mail</label>
                            <input type="email" value="<?= $mostrar['professor_email'] ?>" class="form-control form-control-lg" name="email" />
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="#">Palavra-Passe</label>
                            <input type="password" class="form-control form-control-lg" name="senha" />
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="#">Genero</label>
                            <select name="genero" class="form-control form-control-lg">
                              <option value="">Masculino</option>
                              <option value="">Femenino</option>
                            </select>
                          </div>

                          <div class="form-group col-lg-6">
                              <label for="#">Nº do B.I</label>
                              <input type="text" value="<?= $mostrar['professor_bi'] ?>" class="form-control form-control-lg" name="bi" />
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="#">Foto</label>
                            <input type="file" class="form-control form-control-lg" name="foto" />
                          </div>

                          <?php $fotoUser = $mostrar['professor_foto'] ?>
                        <?php endforeach; ?>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-3">
                          <input type="submit" name="atualizar_perfil" value="Atualizar" class="btn btn-primary form-control">
                        </div>
                      </div>
                      <!-- Atualizar Perfil -->
                      <?php 
                        if(isset($_POST['atualizar_perfil'])):
                          $nome   = $_POST['nome'];
                          $email  = $_POST['email'];
                          $bi     = $_POST['bi'];
                          $genero = $_POST['genero'];
                          $senha  = $_POST['senha'] === '' ? $mostrar['professor_senha'] : md5(md5($_POST['senha']));

                          $target        = "../assets/_storage/" . basename($_FILES['foto']['name']);
                          $foto          = $_FILES['foto']['name'] === '' ? $fotoUser : $_FILES['foto']['name'];

                          $parametros = [
                            ":id"       => $_SESSION['id'],
                            ":nome"     => $nome, 
                            ":email"    => $email,
                            ":senha"    => $senha,
                            ":foto"     => $foto,
                            ":genero"   => $genero, 
                            ":bi"       => $bi
                          ];
      
                          $atualizarMeuPerfil = new Model();
                          $atualizarMeuPerfil->EXE_NON_QUERY("UPDATE tb_professor SET
                            professor_nome=:nome,
                            professor_email=:email,
                            professor_senha=:senha,
                            professor_foto=:foto,
                            professor_bi=:bi,
                            professor_genero=:genero
                            WHERE professor_id=:id
                          ", $parametros);
      
                          if($atualizarMeuPerfil):
                            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)):
                              $sms = "Uploaded feito com sucesso";
                            else:
                              $sms = "Não foi possível fazer o upload";
                            endif;

                            $_SESSION['foto'] = $foto;
                            $_SESSION['nome'] = $nome;
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
                        endif;?>
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
