<?php

// Trait Mensaje
echo "trait Mensaje {\n";
echo "    public function mostrarMensaje(\$mensaje): void {\n";
echo "        echo \"<p>\"\$mensaje\"</p>\";\n";
echo "    }\n";
echo "}\n";

// Modificaciones en Avion
echo "require_once 'ElementoVolador.php';\n";
echo "require_once 'Mensaje.php'; // Incluimos el trait\n";

echo "class Avion extends ElementoVolador {\n";
echo "    use Mensaje; // Usamos el trait\n";
echo "\n";
echo "    public function mostrarInformacion(): void {\n";
echo "        \$this->mostrarMensaje(\"Nombre: \$this->nombre, Compañía: \$this->companiaAerea, Altitud Máxima: \$this->altitudMaxima\");\n";
echo "    }\n";
echo "}\n";

// Modificaciones en Helicoptero
echo "require_once 'ElementoVolador.php';\n";
echo "require_once 'Mensaje.php'; // Incluimos el trait\n";

echo "class Helicoptero extends ElementoVolador {\n";
echo "    use Mensaje; // Usamos el trait\n";
echo "\n";
echo "    public function mostrarInformacion(): void {\n";
echo "        \$this->mostrarMensaje(\"Nombre: \$this->nombre, Propietario: \$this->propietario, Número de Rotores: \$this->nRotor\");\n";
echo "    }\n";
echo "}\n";

// Modificaciones en Aeropuerto
echo "require_once 'Mensaje.php'; // Incluimos el trait\n";

echo "class Aeropuerto {\n";
echo "    use Mensaje; // Usamos el trait\n";
echo "\n";
echo "    private array \$elementosVoladores = []; // Inicializamos el array\n";
echo "\n";
echo "    public function insertar(ElementoVolador \$elemento): void {\n";
echo "        \$this->elementosVoladores[] = \$elemento;\n";
echo "        \$this->mostrarMensaje(\"Elemento agregado: \" . get_class(\$elemento) . \" con nombre: \" . \$elemento->getNombre());\n";
echo "    }\n";
echo "\n";
echo "    public function buscar(string \$nombre): void {\n";
echo "        foreach (\$this->elementosVoladores as \$elemento) {\n";
echo "            if (\$elemento->getNombre() === \$nombre) {\n";
echo "                \$elemento->mostrarInformacion();\n";
echo "                return;\n";
echo "            }\n";
echo "        }\n";
echo "        \$this->mostrarMensaje(\"No se encontró el elemento: \$nombre\");\n";
echo "    }\n";
echo "}\n";

?>