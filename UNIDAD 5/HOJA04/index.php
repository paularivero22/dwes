<?php
require 'helper.php';
require 'src/App/Autenticarse.php';
require 'src/App/Conexion.php';

Autenticarse::inicializar();
Autenticarse::runAccion();
?>