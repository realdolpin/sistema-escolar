<?php 

  if(isset($_POST['userSubmitLogin'])):
    if(empty($_POST['email']) && empty($_POST['password'])):
      echo '<script>
                swal({
                  title: "Opps!",
                  text: "Preencha todos os campos",
                  icon: "error",
                  button: "Fechar!",
                })
            </script>';
        echo '<script>
            setTimeout(function() {
                window.location.href="index.php";
            }, 2000)
        </script>';
      // echo "<script>window.alert('Por favor preenche todos os campos')</script>";
    else:
      $email = $_POST['email'];
      $pass  = $_POST['senha'];

      $parametros = [
        ":email"  => $email,
        ":senha"   => md5(md5($pass))
      ];
      // (1) Efectuando o login do Administrador
      $login = new Model();
      $loginAdmin = $login->EXE_QUERY("SELECT * FROM tb_admin WHERE 
      admin_email=:email AND admin_senha=:senha", $parametros);
      if($loginAdmin):
        // Sessão do administrador
        foreach($loginAdmin as $mostrar):
          $_SESSION['id']       = addslashes($mostrar['admin_id']);
          $_SESSION['nome']     = addslashes($mostrar['admin_nome']);
          $_SESSION['email']    = addslashes($mostrar['admin_email']);
          $_SESSION['senha']    = addslashes($mostrar['admin_senha']);
          $_SESSION['foto']     = addslashes($mostrar['admin_foto']);
        endforeach;
        echo "<script>location.href='admin/index.php?id=home'</script>";
      else:
        // (2) Professor  
        $login = new Model();
        $loginProfessor = $login->EXE_QUERY("SELECT * FROM tb_professor WHERE 
          professor_email=:email AND professor_senha=:senha", $parametros);
        if($loginProfessor):
          foreach($loginProfessor as $mostrar):
            $_SESSION['id']       = addslashes($mostrar['professor_id']);
            $_SESSION['nome']     = addslashes($mostrar['professor_nome']);
            $_SESSION['email']    = addslashes($mostrar['professor_email']);
            $_SESSION['senha']    = addslashes($mostrar['professor_senha']);
            $_SESSION['foto']     = addslashes($mostrar['professor_foto']);
          endforeach;
          echo "<script>location.href='teachers/index.php?id=home'</script>";
        else:
          echo '<script>
              swal({
                title: "Opps!",
                text: "Usuário não encontrado",
                icon: "error",
                button: "Fechar!",
              })
          </script>';
        endif;
      endif;
    endif;
  endif;