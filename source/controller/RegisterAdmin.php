<?php 

  if(isset($_POST['adicionar_professor'])):
    $nome   = $_POST['nome'];
    $email  = $_POST['email'];
    $bi     = $_POST['bi'];
    $genero = $_POST['genero'];
    $senha  = md5(md5("123"));

    $target       = "../assets/_storage/" . basename($_FILES['foto']['name']);
    $foto         = $_FILES['foto']['name'];

    // Parametros 
    $parametros = [
      ":nome"       => $nome,
      ":email"      => $email,
      ":senha"      => $senha,
      ":genero"     => $genero,
      ":bi"         => $bi,
      ":foto"       => $foto
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_professor 
    (
      professor_nome, 
      professor_email, 
      professor_senha, 
      professor_genero,
      professor_bi, 
      professor_foto 
    ) VALUES 
    (
      :nome, 
      :email, 
      :senha, 
      :genero,
      :bi, 
      :foto
    ) ", $parametros);

    if($inserir):
      if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Usuário cadastrado com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="professores.php?id=professores";
          }, 2000)
      </script>';
    endif;
  endif;

  if(isset($_POST['adicionar_aluno'])):
    $curso = $_POST['curso'];
    $classe = $_POST['classe'];

    $emailEncarregado = $_POST['email_encarregado'];
    $telefoneEncarregado = $_POST['telefone_encarregado'];
    $nomeEncarregado = $_POST['nome_encarregado'];

    $rua             = $_POST['rua'];
    $bairro          = $_POST['bairro'];
    $cidade          = $_POST['cidade'];
    $bi              = $_POST['bi'];
    $nacionalidade   = $_POST['nacionalidade'];
    $telefone        = $_POST['telefone'];
    $genero          = $_POST['genero'];
    $dataNascimento  = $_POST['data_nascimento'];
    $email           = $_POST['email'];
    $nome            = $_POST['nome'];
  
    $senha           = md5(md5("aluno2023"));
   
    // file
    // foto_passe,
    // cartao_vacina,
    // atestado,
    // certificado,
    // copia,
    //

    $target1       = "../assets/_storage/" . basename($_FILES['foto_passe']['name']);
    $foto_passe         = $_FILES['foto_passe']['name'];

    $target2       = "../assets/_storage/" . basename($_FILES['cartao_vacina']['name']);
    $cartao_vacina         = $_FILES['cartao_vacina']['name'];

    $target3       = "../assets/_storage/" . basename($_FILES['atestado']['name']);
    $atestado         = $_FILES['atestado']['name'];

    $target4       = "../assets/_storage/" . basename($_FILES['certificado']['name']);
    $certificado         = $_FILES['certificado']['name'];

    $target5       = "../assets/_storage/" . basename($_FILES['copia']['name']);
    $copia         = $_FILES['copia']['name'];

    $parametros = [
      ":nome"                => $nome,
      ":email"               => $email,
      ":senha"               => $senha,
      ":datanascimento"      => $dataNascimento,
      ":genero"              => $genero,
      ":telefone"            => $telefone,
      ":num_documento"       => $bi,
      ":nacionalidade"       => $nacionalidade,
      ":cidade"              => $cidade,
      ":bairro"              => $bairro,
      ":rua"                 => $rua,
      ":encarregado_nome"    => $nomeEncarregado,
      ":encarregado_telefone"=> $telefoneEncarregado,
      ":encarregado_email"   => $emailEncarregado,
      ":certificado"         => $certificado,
      ":copia"               => $copia,
      ":atestado"            => $atestado,
      ":cartao"              => $cartao_vacina,
      ":foto"                => $foto_passe,
      ":ano"                 => 2023,
      ":estado"              => "Pendente",
      ":aluno_situacao"      => "Corrente",
      ":classe"              => $classe,
      ":curso"               => $curso
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_aluno 
    (
      aluno_nome, 
      aluno_email, 
      aluno_senha,
      aluno_data_nascimento, 
      aluno_genero, 
      aluno_telefone,
      aluno_num_documento, 
      aluno_nacionalidade, 
      aluno_cidade, 
      aluno_bairro, 
      aluno_rua, 
      aluno_encarregado_nome, 
      aluno_encarregado_telefone, 
      aluno_encarregado_email, 
      aluno_certificado, 
      aluno_copia_bi, 
      aluno_atestado_medico, 
      aluno_cartao_vacina, 
      aluno_foto_passe, 
      aluno_ano_lectivo, 
      aluno_estado, 
      aluno_situacao, 
      classe_id, 
      curso_id, 
      data_registro_aluno 
    ) VALUES (
      :nome, 
      :email, 
      :senha, 
      :datanascimento, 
      :genero, 
      :telefone, 
      :num_documento, 
      :nacionalidade, 
      :cidade, 
      :bairro, 
      :rua, 
      :encarregado_nome, 
      :encarregado_telefone,
      :encarregado_email, 
      :certificado, 
      :copia, 
      :atestado, 
      :cartao, 
      :foto, 
      :ano, 
      :estado, 
      :aluno_situacao, 
      :classe, 
      :curso, 
      now()
    ) ", $parametros);
    if($inserir):

      if (move_uploaded_file($_FILES['foto_passe']['tmp_name'], $target1)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;
      if (move_uploaded_file($_FILES['cartao_vacina']['tmp_name'], $target2)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;
      if (move_uploaded_file($_FILES['atestado']['tmp_name'], $target3)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;
      if (move_uploaded_file($_FILES['certificado']['tmp_name'], $target4)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;
      if (move_uploaded_file($_FILES['copia']['tmp_name'], $target5)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;

      echo '<script> 
              swal({
                title: "Dados inseridos!",
                text: "Usuário cadastrado com sucesso",
                icon: "success",
                button: "Fechar!",
              })
            </script>';
        echo '<script>
            setTimeout(function() {
                window.location.href="alunos.php?id=alunos";
            }, 2000)
        </script>';
    endif;
  endif;

  if(isset($_POST['adicionar_curso'])):
    $nome = $_POST['nome'];

    $parametros = [":nome" => $nome];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_curso 
    (curso_nome) VALUES (:nome) ", $parametros);

    if($inserir):
      echo '<script> 
              swal({
                title: "Dados inseridos!",
                text: "Curso cadastrado com sucesso",
                icon: "success",
                button: "Fechar!",
              })
            </script>';
        echo '<script>
            setTimeout(function() {
                window.location.href="classes.php?id=classes";
            }, 2000)
        </script>';
    endif;
  endif;

  if(isset($_POST['adicionar_classe'])):
    $nome = $_POST['nome'];

    $parametros = [
      ":nome"   => $nome
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_classe (classe_nome) 
    VALUES (:nome) ", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Curso cadastrado com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="classes.php?id=classes";
          }, 2000)
      </script>';
    endif;
  endif;

  if(isset($_POST['adicionar_turma'])):
    
    $parametros = [
      ":nome"       => $_POST['nome'],
      ":classe"     => $_POST['classe'],
      ":curso"      => $_POST['curso']
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_turma (turma_nome, classe_id, curso_id) 
    VALUES (:nome, :classe, :curso) ", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Turma cadastrada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="turmas.php?id=turmas";
          }, 2000)
      </script>';
    endif;
  endif;
        
  if(isset($_POST['adicionar_disciplina'])):
    
    $parametros = [
      ":nome"     => $_POST['nome'],
      ":carga"    => $_POST['carga']
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_disciplina (disciplina_nome, disciplina_carga_horaria) 
    VALUES (:nome, :carga) ", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Turma cadastrada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="disciplinas.php?id=disciplinas";
          }, 2000)
      </script>';
    endif;
  endif;

  if(isset($_POST['adicionar_matricula'])):
    $nomeAluno = $_POST['aluno'];
    $turma     = $_POST['turma'];

    $ano       = "2022/2023";

    $parametros = [
      ":aluno"      => $nomeAluno,
      ":turma"      => $turma,
      ":ano"        => $ano  
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_matricula 
    (aluno_id, turma_id, ano_lectivo, data_registro_matricula) 
    VALUES(:aluno, :turma, :ano, now() )", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Matricula cadastrada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="matriculas.php?id=matriculas";
          }, 2000)
      </script>';
    endif;
  endif;

  if(isset($_POST['adicionar_horario'])):
    $target        = "../assets/_storage/" . basename($_FILES['foto']['name']);
    $foto          = $_FILES['foto']['name'];

    $turma         = $_POST['turma'];

    $parametros = [
      ":foto"      => $foto,
      ":turma"     => $turma, 
      ":admin_id"  => $_SESSION['id']
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_horario (
      horario_arquivo, turma_id, admin_id
    ) VALUES (:foto, :turma, :admin_id) ", $parametros);

    if($inserir):
      if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)):
        $sms = "Uploaded feito com sucesso";
      else:
        $sms = "Não foi possível fazer o upload";
      endif;
      
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Horário cadastrada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="horario.php?id=horario";
          }, 2000)
      </script>';
    endif;
  endif;


  if(isset($_POST['atribuir_disciplina'])):
    $professorId = $_GET['professorId'];
    $disciplina  = $_POST['disciplina'];

    $parametros = [
      ":disciplina"  => $disciplina,  
      ":professorId" => $professorId  
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_disciplina_professor 
    (disciplina_id, professor_id) VALUES (:disciplina, :professorId) ", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Horário cadastrada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="professores.php?id=professores";
          }, 2000)
      </script>';
    endif;
  endif;


  if(isset($_POST['atribuir_turma'])):
    $professorId = $_GET['professorId'];
    $turma       = $_POST['turma'];

    $parametros = [
      ":turma"       => $turma,  
      ":professorId" => $professorId  
    ];

    $inserir = new Model();
    $inserir->EXE_NON_QUERY("INSERT INTO tb_turma_professor 
    (turma_id, professor_id) VALUES (:turma, :professorId) ", $parametros);

    if($inserir):
      echo '<script> 
            swal({
              title: "Dados inseridos!",
              text: "Horário cadastrada com sucesso",
              icon: "success",
              button: "Fechar!",
            })
          </script>';
      echo '<script>
          setTimeout(function() {
              window.location.href="professores.php?id=professores";
          }, 2000)
      </script>';
    endif;
  endif;