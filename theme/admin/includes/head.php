<!-- Head -->
<?php require '../public/authConfig.php' ?>
<!-- End Head -->

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />

    <!-- Title Page-->
    <title>Admin | Sistema de Gestão Escolar</title>

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all" />
    <link
      href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Bootstrap CSS-->
    <link
      href="../assets/vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="../assets/vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />

    <link
      href="../assets/vendor/wow/animate.css"
      rel="stylesheet"
      media="all"
    />

    <link
      href="../assets/vendor/slick/slick.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.css">
    <script src="../assets/js/sweetalert.min.js"></script>
    <style>
      .logo img {
        width: 90%
      }

      .avatar-image{
        width: 100%;
        border-radius: 100%;
      }

      .modal-backdrop.show {
        opacity: .8 !important;
      }

      .img-120 img{
        width: 110px;
        height: 110px;
      }

      .logo-admin {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;

        color: #000;
      }

      .logo-admin img {
        width: 60px;
        height: 60px;
      }

      .logo-admin span {
        font-size: 2rem;
        font-weigth: bold;

        color: #fdd41c;
      }

      .form-control,
      select,
      input[type="file"],
      input::placeholder {
        font-size: .9rem !important;
      }

      .btn-primary {
        background: #fdd41c !important;
        border: 1px solid #fdd41c !important;
      }

      .navbar__list .active {
        background: #fdd41c !important;
        color: #fff !important;
      }

      /* .table-responsive {
        overflow-x: auto !important;
        background: blue;
      }

      .table-responsive table {
        max-width: 100% !important;
        background: red !important;
      } */
    </style>
  </head>


    <!-- <object data="../assets/_storage/<?= $details['horario_arquivo'] ?>" type="application/x-pdf" title="Comprovativo">
            <a href="../assets/_storage/<?= $details['horario_arquivo'] ?>" class="text-dark" target="_blank">
              <p class="text-success">
                Visualizar o horário
              </p>
            </a>
          </object> -->