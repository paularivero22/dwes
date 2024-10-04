<?php
namespace MiProyecto;

use MiProyecto\Clases\Aeropuerto;
use MiProyecto\Clases\Avion;
use MiProyecto\Clases\Helicoptero;

// Crear un objeto de tipo Aeropuerto
$aeropuerto = new Aeropuerto();

// Crear tres aviones
$avion1 = new Avion("Avión 1", 2, 2, "Aerolínea A", "2022-01-01", 12000);
$avion2 = new Avion("Avión 2", 2, 2, "Aerolínea B", "2022-01-02", 15000);
$avion3 = new Avion("Avión 3", 2, 2, "Aerolínea C", "2022-01-03", 14000);

// Crear tres helicópteros
$helicoptero1 = new Helicoptero("Helicóptero 1", 2, 1, "Propietario A", 4);
$helicoptero2 = new Helicoptero("Helicóptero 2", 2, 1, "Propietario B", 3);
$helicoptero3 = new Helicoptero("Helicóptero 3", 2, 1, "Propietario C", 5);

// Introducir los objetos creados en el aeropuerto
$aeropuerto->insertar($avion1);
$aeropuerto->insertar($avion2);
$aeropuerto->insertar($avion3);
$aeropuerto->insertar($helicoptero1);
$aeropuerto->insertar($helicoptero2);
$aeropuerto->insertar($helicoptero3);

// Probar los métodos
$aeropuerto->buscar("Avión 1");
$aeropuerto->listarCompania("Aerolínea A");
$aeropuerto->rotores(4);
$aeropuerto->despegar("Avión 1", 1000, 200);
$aeropuerto->despegar("Helicóptero 1", 80, 100);
?>