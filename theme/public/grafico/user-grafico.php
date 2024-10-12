<?php

$parametros = [":id" => $_SESSION['id']];
$mensal = new Model();

$janeiro = $mensal->EXE_QUERY("SELECT count(id_reserva) as janeiro FROM tb_reserva
WHERE month(data_registro_reserva) = 1 AND id_cliente=:id", $parametros);
foreach($janeiro as $mostrar):
$janeiro = $mostrar['janeiro'];
endforeach;

$fevereiro = $mensal->EXE_QUERY("SELECT count(id_reserva) as fevereiro FROM tb_reserva
WHERE month(data_registro_reserva) = 2 AND id_cliente=:id", $parametros);
foreach($fevereiro as $mostrar):
$fevereiro = $mostrar['fevereiro'];
endforeach;

$marco = $mensal->EXE_QUERY("SELECT count(id_reserva) as marco FROM tb_reserva
WHERE month(data_registro_reserva) = 3 AND id_cliente=:id", $parametros);
foreach($marco as $mostrar):
$marco = $mostrar['marco'];
endforeach;

$abril = $mensal->EXE_QUERY("SELECT count(id_reserva) as abril FROM tb_reserva
WHERE month(data_registro_reserva) = 4 AND id_cliente=:id", $parametros);
foreach($abril as $mostrar):
$abril = $mostrar['abril'];
endforeach;

$maio = $mensal->EXE_QUERY("SELECT count(id_reserva) as maio FROM tb_reserva
WHERE month(data_registro_reserva) = 5 AND id_cliente=:id", $parametros);
foreach($maio as $mostrar):
$maio = $mostrar['maio'];
endforeach;

$junho = $mensal->EXE_QUERY("SELECT count(id_reserva) as junho FROM tb_reserva
WHERE month(data_registro_reserva) = 6 AND id_cliente=:id", $parametros);
foreach($junho as $mostrar):
$junho = $mostrar['junho'];
endforeach;

$julho = $mensal->EXE_QUERY("SELECT count(id_reserva) as julho FROM tb_reserva
WHERE month(data_registro_reserva) = 7 AND id_cliente=:id", $parametros);
foreach($julho as $mostrar):
$julho = $mostrar['julho'];
endforeach;

$agosto = $mensal->EXE_QUERY("SELECT count(id_reserva) as agosto FROM tb_reserva
WHERE month(data_registro_reserva) = 8 AND id_cliente=:id", $parametros);
foreach($agosto as $mostrar):
$agosto = $mostrar['agosto'];
endforeach;

$setembro = $mensal->EXE_QUERY("SELECT count(id_reserva) as setembro FROM tb_reserva
WHERE month(data_registro_reserva) = 9 AND id_cliente=:id", $parametros);
foreach($setembro as $mostrar):
$setembro = $mostrar['setembro'];
endforeach;

$outubro = $mensal->EXE_QUERY("SELECT count(id_reserva) as outubro FROM tb_reserva
WHERE month(data_registro_reserva) = 10 AND id_cliente=:id", $parametros);
foreach($outubro as $mostrar):
$outubro = $mostrar['outubro'];
endforeach;

$novembro = $mensal->EXE_QUERY("SELECT count(id_reserva) as novembro FROM tb_reserva
WHERE month(data_registro_reserva) = 11 AND id_cliente=:id", $parametros);
foreach($novembro as $mostrar):
$novembro = $mostrar['novembro'];
endforeach;

$dezembro = $mensal->EXE_QUERY("SELECT count(id_reserva) as dezembro FROM tb_reserva
WHERE month(data_registro_reserva) = 12 AND id_cliente=:id", $parametros);
foreach($dezembro as $mostrar):
$dezembro = $mostrar['dezembro'];
endforeach;

$reservasData[] = (int)$janeiro;
$reservasData[] = (int)$fevereiro;
$reservasData[] = (int)$marco;
$reservasData[] = (int)$abril;
$reservasData[] = (int)$maio;
$reservasData[] = (int)$junho;
$reservasData[] = (int)$julho;
$reservasData[] = (int)$agosto;
$reservasData[] = (int)$setembro;
$reservasData[] = (int)$outubro;
$reservasData[] = (int)$novembro;
$reservasData[] = (int)$dezembro;
