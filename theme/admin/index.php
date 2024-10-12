  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <?php 
    // Contador de Professores no sistema 
    $searchCount = new Model();
    $searchTeacher = $searchCount->EXE_QUERY("SELECT * FROM tb_professor");
    $searchStudant = $searchCount->EXE_QUERY("SELECT * FROM tb_aluno");
    $searchCourse  = $searchCount->EXE_QUERY("SELECT * FROM tb_curso");
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
                        >Painel Administrativo</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <span class="au-breadcrumb-span"
                    >Seja bem-vindo: Dr(a). <strong><?= $_SESSION['nome'] ?></strong> </span
                  >
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- ESTATISTICA-->
        <section class="estatistica">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                      <div class="overview-box clearfix">
                        <div class="icon">
                          <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                          <h2><?= count($searchTeacher); ?></h2>
                          <span>Professores</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                      <div class="overview-box clearfix">
                        <div class="icon">
                          <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                          <h2><?= count($searchStudant); ?></h2>
                          <span>Estudantes</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                      <div class="overview-box clearfix">
                        <div class="icon">
                          <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                          <h2><?= count($searchCourse); ?></h2>
                          <span>Cursos</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-8 col-xl-8">
                  <div class="card">
                    <div class="card-header">
                     <div class="row">
                       <div class="col-lg-12">
                        <h4 class="card-title">Gráfico Estudantes por Ano</h4>
                       </div>
                     </div>
                    </div>
                    <div class="charts mt-2">
                      <canvas
                        id="clientesChart"
                        style="height: 300px"
                      ></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Estudantes Por Sexo</h4>
                    </div>
                    <div class="charts mt-2">
                      <canvas
                        id="clienteSexo"
                        style="height: 300px"
                      ></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END ESTATISTICA-->

        <!-- END PAGE CONTAINER-->
      </div>
    </div>

    <!-- FOOTER -->
    <?php require 'includes/footer.php' ?>
    <!-- END FOOTER -->
    <?php require '../public/grafico/admin-grafico.php' ?>

    <script>
      $(function() {
        var clientesChart = document.getElementById("clientesChart").getContext("2d");
        var cliente = new Chart(clientesChart, {
          type: "bar",
          data: {
            labels: ["2021","2022", "2023",],
            datasets: [
              {
                label: "Registro de estudantes",
                borderColor: "#fdd41c",
                pointBorderColor: "#fdd41c",
                pointBackgroundColor: "#fdd41c",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: "#fdd41c",
                fill: true,
                borderWidth: 2,
                data: <?= json_encode($alunoAno) ?>,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
              position: "bottom",
              labels: {
                padding: 10,
                fontColor: "#fdd41c",
              },
            },
            tooltips: {
              bodySpacing: 4,
              mode: "nearest",
              intersect: 0,
              position: "nearest",
              xPadding: 10,
              yPadding: 10,
              caretPadding: 10,
            },
            layout: {
              padding: { left: 15, right: 15, top: 15, bottom: 15 },
            },
          },
        });

        var clienteSexo = document.getElementById("clienteSexo").getContext("2d");
        var clientex = new Chart(clienteSexo, {
          type: "pie",
          data: {
            labels: [
              "Masculino", "Femenino"
            ],
            datasets: [
              {
                label: "Empresas registadas",
                borderColor: "#fff",
                pointBorderColor: "#26ADE4",
                pointBackgroundColor: "#26ADE4",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: ["#26ADE4", "#EE558E"],
                fill: true,
                borderWidth: 2,
                data: <?= json_encode($dataSexo) ?>,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
              position: "bottom",
              labels: {
                padding: 10,
                fontColor: "#26ADE4",
              },
            },
            tooltips: {
              bodySpacing: 4,
              mode: "nearest",
              intersect: 0,
              position: "nearest",
              xPadding: 10,
              yPadding: 10,
              caretPadding: 10,
            },
            layout: {
              padding: { left: 15, right: 15, top: 15, bottom: 15 },
            },
          },
        });
      })
    </script>
  </body>
</html>
<!-- end document-->
