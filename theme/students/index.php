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
                        >Painel Estudante</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <span class="au-breadcrumb-span">Classe: <strong>12ª classe</strong></span>
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
                <div class="col-sm-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-lg-12">
                          <h1>Encontrar um collapse </h1>
                        </div>
                      </div>
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

    <script>
      $(function() {
        var clientesChart = document.getElementById("clientesChart").getContext("2d");
        var cliente = new Chart(clientesChart, {
          type: "bar",
          data: {
            labels: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
            ],
            datasets: [
              {
                label: "Clientes registadas",
                borderColor: "#26ADE4",
                pointBorderColor: "#26ADE4",
                pointBackgroundColor: "#26ADE4",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: "#26ADE4",
                fill: true,
                borderWidth: 2,
                data: [0, 0 , 0 , 0],
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
                data: [0, 0, 0],
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
