<?php

$mensal = new Model();

$ano1 = $mensal->EXE_QUERY("SELECT count(aluno_id) AS total_alunos FROM tb_aluno
WHERE YEAR(data_registro_aluno) = 2021");

foreach($ano1 as $mostrar):
$ano1 = $mostrar['total_alunos'];
endforeach;

$ano2 = $mensal->EXE_QUERY("SELECT count(aluno_id) AS total_alunos FROM tb_aluno
WHERE YEAR(data_registro_aluno) = 2022");
foreach($ano2 as $mostrar):
$ano2 = $mostrar['total_alunos'];
endforeach;

$ano3 = $mensal->EXE_QUERY("SELECT count(aluno_id) AS total_alunos FROM tb_aluno
WHERE YEAR(data_registro_aluno) = 2023");
foreach($ano3 as $mostrar):
$ano3 = $mostrar['total_alunos'];
endforeach;

$alunoAno[] = (int)$ano1;
$alunoAno[] = (int)$ano2;
$alunoAno[] = (int)$ano3;



$clienteSexoMasculino = $mensal->EXE_QUERY("SELECT count(aluno_id) as masculino FROM tb_aluno
WHERE aluno_genero='M' ");
foreach($clienteSexoMasculino as $mostrar):
$masculino = $mostrar['masculino'];
endforeach;

$clienteSexoFemenino = $mensal->EXE_QUERY("SELECT count(aluno_id) as femenino FROM tb_aluno
WHERE aluno_genero='F' ");
foreach($clienteSexoFemenino as $mostrar):
$femenino = $mostrar['femenino'];
endforeach;

$dataSexo[] = (int)$masculino;
$dataSexo[] = (int)$femenino;