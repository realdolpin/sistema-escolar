  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    $buscando = new Model();
    $buscandoClasse = $buscando->EXE_QUERY("SELECT * FROM tb_classe");
    $buscandoCurso  = $buscando->EXE_QUERY("SELECT * FROM tb_curso");
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
                        >Cadastrar aluno</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="alunos.php?id=alunos" class="btn btn-primary">Lista Aluno</a>
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
                        <h4>Dados Pessoais</h4>
                        <hr>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Nome do aluno <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o nome do aluno"  
                          />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">E-mail do aluno <span class="text-danger">*</span></label>
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
                          <label for="">Data de Nascimento <span class="text-danger">*</span></label>
                          <input 
                            type="date" 
                            name="data_nascimento" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o e-mail do professor" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Selecione a Genero <span class="text-danger">*</span></label>
                          <select name="genero" class="form-control form-control-lg">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Telefone <span class="text-danger">*</span></label>
                          <input 
                            type="tel" 
                            name="telefone" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o numero de telefone" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Selecione a Nacionalidade <span class="text-danger">*</span></label>
                          <select name="nacionalidade" class="form-control form-control-lg">
                            <option value="Angolana">Angolana</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Nº B.I <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="bi" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o numero de BI" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Cidade <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="cidade" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o numero de BI" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-2">
                        <div class="form-group">
                          <label for="">Bairro <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="bairro" 
                            class="form-control form-control-lg" 
                            placeholder="Bairro" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-2">
                        <div class="form-group">
                          <label for="">Rua <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="rua" 
                            class="form-control form-control-lg" 
                            placeholder="Rua" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Nome Encarregado <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="nome_encarregado" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o numero de BI" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Encarregado Telefone <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="telefone_encarregado" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o numero de BI" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Encarregado E-mail <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="email_encarregado" 
                            class="form-control form-control-lg" 
                            placeholder="Digite o numero de BI" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-12">
                        <h4>Dados Documentais</h4>
                        <hr>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Certificado de Habilitação <span class="text-danger">*</span></label>
                          <input 
                            type="file" 
                            name="certificado" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Cópia do B.I <span class="text-danger">*</span></label>
                          <input 
                            type="file" 
                            name="copia" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Atestado Médico <span class="text-danger">*</span></label>
                          <input 
                            type="file" 
                            name="atestado" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Cartão de Vacina <span class="text-danger">*</span></label>
                          <input 
                            type="file" 
                            name="cartao_vacina" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto Passe <span class="text-danger">*</span></label>
                          <input 
                            type="file" 
                            name="foto_passe" 
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Classe e Turma <span class="text-danger">*</span></label>
                          <select name="classe" class="form-control form-control-lg">
                            <option value="">Selecione a classe</option>
                            <?php foreach($buscandoClasse as $details):?>
                            <option value="<?= $details['classe_id'] ?>">
                              <?= $details['classe_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Curso <span class="text-danger">*</span></label>
                          <select name="curso" class="form-control form-control-lg">
                            <option value="">Selecione o curso</option>
                            <?php foreach($buscandoCurso as $details):?>
                            <option value="<?= $details['curso_id'] ?>">
                              <?= $details['curso_nome'] ?>
                            </option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-8">
                        <div class="form-group">
                          <label for="">Ano Lectivo <span class="text-danger">*</span></label>
                          <input 
                            type="text" 
                            name="ano"
                            value="2023" 
                            disabled
                            class="form-control form-control-lg" 
                          />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3">
                        <button type="submit" name="adicionar_aluno" class="form-control form-control-lg btn-primary">Adicionar Aluno</button>
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
