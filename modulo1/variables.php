<?php
//não precisamos declarar o tipo das variáveis na maioria das vezes
//variáveis
//CASE SENSITIVE
$age = 34;
$Age = 41;
//constantes
define('VERSION', 1.1);
echo VERSION;
// é uma variável sem o $
/*
VERSION - 1.2; // NÃO FUNCIONA
define ('VERSION', 1.2); // NÃO FUNCIONA
*/

// Aspas simples são mais rapidamente processadas pelo PHP,
// porém para usar scape, as aspas simples só reconhecem uma simples barra antes de aspas simples.
// As aspas duplas aceitam os outros scapes
?>