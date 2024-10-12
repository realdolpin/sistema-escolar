<?php
    include '../../../source/model/Config.php';
    include '../../../source/model/Model.php';
    include '../../assets/mpdf-6.1/mpdf.php';

    switch ($_GET['id']):
      case 'clientes':
        // Instanciando
          $usuario = new Model();
          $sql = $usuario->EXE_QUERY("SELECT * FROM tb_cliente");

          $html = "
                <html>
                  <head>
                      <style type='text/css'>
                          body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                          .container {margin: 100px auto !important;}
                          .nav-header {margin: 0px auto;text-align: center;}
                          .mk-title {font-weight: 100;font-size: 18px;}
                          .mk-title-lg {font-weight: 100;font-size: 18px}
                          img {width: 200px}

                          table { width: 100%; border-spacing: 0 0.5rem; }
                          table th {
                            background: #26ADE4;
                            font-weight: 400;
                            padding: 1rem 2rem;
                            text-align: left;
                            line-height: 1.5rem;
                          }
                          table td {
                            padding: 1rem 2rem;
                            border: 0;
                            background: #f7f7f7;
                            color: #000 !important;
                          }
                      </style>
                  </head>
                  <body>
                      <div class='container'>
                          <div class='row'>
                              <div class='nav-header'>
                                  <img src='../../assets/images/icon/logo-blue.png'>
                                  <h2 class='text-center h5 mk-title'>Sistema de Gestão de Reserva Hoteleira</h2>
                                  <p class='mt-2'>Relatório de Clientes</p>
                              </div>
                          </div>
                          <div class='body-mk mt-4'>
                              <div class='table'>
                                  <table>
                                      <thead>
                                          <tr>
                                              <th style='color: white'>Id</th>
                                              <th style='color: white'>Nome Completo</th>
                                              <th style='color: white'>Idade</th>
                                              <th style='color: white'>Telefone</th>
                                              <th style='color: white'>Genero</th>
                                          </tr>
                                      </thead>
                                      <tbody>
              ";
              foreach ($sql as $mostrar) :
                $genero = $mostrar['genero_cliente'] === 'M' ? "Masculino": "Femenino";
                $html = $html ."
                                          <tr>
                                            <td>{$mostrar["id_cliente"] }</td>
                                            <td>{$mostrar["nome_cliente"] }</td>
                                            <td>{$mostrar["idade_cliente"] }</td>
                                            <td>{$mostrar["tel_cliente"] }</td>
                                            <td>{$genero }</td>
                                          </tr>
                ";
                      endforeach;
                      $html = $html."
                                      </tbody>
                                  </table>
                              </div>
                          </div>
              </div>
              ";

          $multa = "index.php";
          $mpdf = new mPDF();
          $mpdf->SetDisplayMode("fullpage");
          $mpdf->WriteHTML($html);
          $mpdf->Output($multa, 'I');
          exit();
      break;

      case 'reserva':
        // Instanciando
        $usuario = new Model();
        $sql = $usuario->EXE_QUERY("SELECT * FROM tb_reserva 
        INNER JOIN tb_cliente ON tb_reserva.id_cliente=tb_cliente.id_cliente
        INNER JOIN tb_quarto ON tb_reserva.id_quarto=tb_quarto.id_quarto
        ");

        $html = "
              <html>
                <head>
                  <style type='text/css'>
                      body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                      .container {margin: 100px auto !important;}
                      .nav-header {margin: 0px auto;text-align: center;}
                      .mk-title {font-weight: 100;font-size: 18px;}
                      .mk-title-lg {font-weight: 100;font-size: 18px}
                      img {width: 200px}

                      table { width: 100%; border-spacing: 0 0.5rem; }
                      table th {
                          background: #26ADE4;
                          font-weight: 400;
                          padding: 1rem 2rem;
                          text-align: left;
                          line-height: 1.5rem;
                      }
                      table td {
                          padding: 1rem 2rem;
                          border: 0;
                          background: #f7f7f7;
                          color: #000 !important;
                      }
                  </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='row'>
                            <div class='nav-header'>
                              <img src='../../assets/images/icon/logo-blue.png'>
                              <h2 class='text-center h5 mk-title'>Sistema de Gestão de Reserva Hoteleira</h2>
                              <p class='mt-2'>Relatório de Reserva</p>
                            </div>
                        </div>
                        <div class='body-mk mt-4'>
                            <div class='table'>
                                <table>
                                    <thead>
                                        <tr>
                                            <th style='color: white'>Id</th>
                                            <th style='color: white'>Nome Reservante</th>
                                            <th style='color: white'>Nº do Quarto</th>
                                            <th style='color: white'>Data Entrada</th>
                                            <th style='color: white'>Data Saída</th>
                                            <th style='color: white'>Contacto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            ";
            foreach ($sql as $mostrar) :
              $html = $html ."
                                        <tr>
                                            <td>{$mostrar["id_reserva"] }</td>
                                            <td>{$mostrar["nome_cliente"] }</td>
                                            <td>{$mostrar["numero_quarto"] }</td>
                                            <td>{$mostrar["data_entrada"] }</td>
                                            <td>{$mostrar["data_saida"] }</td>
                                            <td>{$mostrar["tel_cliente"] }</td>
                                        </tr>
              ";
                    endforeach;
                    $html = $html."
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
            ";

        $multa = "index.php";
        $mpdf = new mPDF();
        $mpdf->SetDisplayMode("fullpage");
        $mpdf->WriteHTML($html);
        $mpdf->Output($multa, 'I');
        exit();
      break;
      
      case 'feedback':
        $usuario = new Model();
        $sql = $usuario->EXE_QUERY("SELECT * FROM tb_reserva");

        $html = "
            <html>
                <head>
                <style type='text/css'>
                    body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                    .container {margin: 100px auto !important;}
                    .nav-header {margin: 0px auto;text-align: center;}
                    .mk-title {font-weight: 100;font-size: 18px;}
                    .mk-title-lg {font-weight: 100;font-size: 18px}
                    img {width: 200px}

                    table { width: 100%; border-spacing: 0 0.5rem; }
                    table th {
                        background: #26ADE4;
                        font-weight: 400;
                        padding: 1rem 2rem;
                        text-align: left;
                        line-height: 1.5rem;
                    }
                    table td {
                        padding: 1rem 2rem;
                        border: 0;
                        background: #f7f7f7;
                        color: #000 !important;
                    }
                </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='row'>
                            <div class='nav-header'>
                            <img src='../../assets/images/icon/logo-blue.png'>
                            <h2 class='text-center h5 mk-title'>Sistema de Gestão de Reserva Hoteleira</h2>
                            <p class='mt-2'>Relatório de Reserva</p>
                            </div>
                        </div>
                        <div class='body-mk mt-4'>
                            <div class='table'>
                                <table>
                                    <thead>
                                        <tr>
                                            <th style='color: white'>Id</th>
                                            <th style='color: white'>Nome Completo</th>
                                            <th style='color: white'>B.I</th>
                                            <th style='color: white'>Modelo</th>
                                            <th style='color: white'>Data Entrada</th>
                                            <th style='color: white'>Matricula</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            ";
            foreach ($sql as $mostrar) :
            $html = $html ."
                                        <tr>
                                            <td>{$mostrar["id_estacionar"] }</td>
                                            <td>{$mostrar["nome_cliente"] }</td>
                                            <td>{$mostrar["bi"] }</td>
                                            <td>{$mostrar["modelo"] }</td>
                                            <td>{$mostrar["data_entrada"] }</td>
                                            <td>{$mostrar["matricula"] }</td>
                                        </tr>
            ";
                    endforeach;
                    $html = $html."
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
            ";

        $multa = "index.php";
        $mpdf = new mPDF();
        $mpdf->SetDisplayMode("fullpage");
        $mpdf->WriteHTML($html);
        $mpdf->Output($multa, 'I');
        exit();
      break;

      case 'fatura-reserva':
        // Instanciando
        $parametros = [
            ":id" => $_GET['idUsuario'], 
            ":idReserva" => $_GET['idReserva']
        ];
        $usuario = new Model();
        $sql = $usuario->EXE_QUERY("SELECT * FROM tb_reserva 
        INNER JOIN tb_quarto ON tb_reserva.id_quarto=tb_quarto.id_quarto
        INNER JOIN tb_cliente ON tb_reserva.id_cliente=tb_cliente.id_cliente
        WHERE tb_cliente.id_cliente=:id AND tb_reserva.id_reserva=:idReserva", $parametros);
        $html = "
            <html>
                <head>
                    <style type='text/css'>
                        .borda {
                            height: 150vh;
                            padding: 20px;
                        }
                        
                        p {
                            color: #000 !important;
                            font-family: Poppins;
                        }

                        .header {
                            text-align: center;
                            font-weight:bold;
                        }

                        .header h1 {
                            font-size: 18px;
                        }

                        .footer {
                            text-align: center;
                            font-weight:bold;
                        }
                        .text-warning {
                            color: yellow;
                        }
                        .text-success {
                            color: green;
                        }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='body-mk mt-4'>
                            <div class='borda'>";
            foreach ($sql as $mostrar) :
                $estado = $mostrar['estado_reserva'] === "0" ? '<span class="text-warning">Por aprovar</span>' : '<span class="text-success">Aprovado</span>';
            $html = $html ."
                        <div class='flex-paragrafo'>
                            <div class='header'>
                                <h1>COMPROVATIVO DE APROVAÇÃO DA RESERVA DE QUARTO</h1>
                            </div>
                            <hr/>
                            <div>
                                <p>Nome Completo : <strong>{$mostrar['nome_cliente'] }</strong> </p>
                            </div>
                            <div>
                                <p>Telefone : <strong>{$mostrar['tel_cliente'] }</strong> </p>
                            </div>
                            <div>
                                <p>Nº do Quarto : <strong>{$mostrar['numero_quarto'] }</strong> </p>
                            </div>
                            <div>
                                <p>Data de Entrada : <strong>{$mostrar['data_entrada'] }</strong> </p>
                            </div>
                            <div>
                                <p>Tipo de Quarto : <strong>{$mostrar['tipo_quarto'] }</strong> </p>
                            </div>
                            <div>
                                <p>Preço do Quarto : <strong>{$mostrar['preco_quarto'] }</strong> </p>
                            </div>
                            <div>
                                <p>Nº da Reserva : <strong>{$mostrar['id_reserva'] }</strong> </p>
                            </div>
                            <div>
                                <p>Data de Saída : <strong>{$mostrar['data_saida'] }</strong> </p>
                            </div>
                            <hr/>
                            <div class='footer'>
                                <p>Estado da Reserva : <strong>{$estado}</strong> </p>
                            </div>
                        </div>";
                    endforeach;
                    $html = $html."
                            </div>
                        </div>
                    </div>
                </body>
            ";

        $multa = "index.php";
        $mpdf = new mPDF();
        $mpdf->SetDisplayMode("fullpage");
        $mpdf->WriteHTML($html);
        $mpdf->Output($multa, 'I');
        exit();
      break;
      
      default:
      break;
    endswitch;
?>