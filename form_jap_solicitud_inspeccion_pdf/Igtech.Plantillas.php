<?php
//__NM__Manejo de las plantillas html__NM__FUNCTION__NM__//
class Plantilla {
    private $datos = '';
    private $archivo;

    // Constructor using PHP 7+ style
    public function __construct($nombre) {
        $this->archivo = $nombre;
    }

    // Load template from file
    public function CargarPlantilla() {
        $nombre = $_SERVER["DOCUMENT_ROOT"] . $_SESSION['RUTA_SKINS'] . $this->archivo;

        if (!file_exists($nombre)) {
            $this->datos = 'No se pudo cargar plantilla';
            return;
        }

        $fp = fopen($nombre, "r");
        if ($fp === false) {
            $this->datos = 'Error al abrir el archivo';
            return;
        }

        $this->datos = fread($fp, filesize($nombre));
        fclose($fp);
   
    }

    // Load template without replacing placeholders
    public function CargarPlantillaVacia() {
        $nombre = $_SERVER["DOCUMENT_ROOT"] . $_SESSION['RUTA_SKINS'] . $this->archivo;

        if (!file_exists($nombre)) {
            $this->datos = 'No se pudo cargar plantilla';
            return;
        }

        $fp = fopen($nombre, "r");
        if ($fp === false) {
            $this->datos = 'Error al abrir el archivo';
            return;
        }

        $this->datos = fread($fp, filesize($nombre));
        fclose($fp);
    }

    // Replace a placeholder with a value
    public function Set($campo, $valor) {
        $this->datos = str_replace($campo, $valor, $this->datos);
    }

    // Return the template content
    public function Formulario() {
        return $this->datos;
    }

    // List all variables (placeholders) in the template
    public function ListarVariables() {
        $variables = [];
        $porciones = explode(" ", $this->datos);

        foreach ($porciones as $v) {
            if (substr($v, 0, 1) == '$') {
                $variables[] = $v;
            }
        }

        return $variables;
    }
}
?>