<?php

  if(isset($_POST['adicionar_nota'])):
    $aluno      = $_POST['aluno'];
    $trimestre  = $_POST['trimestre'];
    $disciplina = $_POST['disciplina'];
    $nota       = $_POST['nota'];

    $parametros = [
      ":aluno"         => $aluno,
      ":disciplina"    => $disciplina,
      ":trimestre"     => $trimestre,
      ":professor"     => $_SESSION['id'],
      ":nota"          => $nota
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_nota 
    (aluno_id, disciplina_id, trimestre_id, professor_id, nota)
    VALUES (:aluno, :disciplina, :trimestre, :professor, :nota) ", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Nota adicionada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="notas.php?id=notas";
          }, 2000)
      </script>';
    endif;
  endif;