<?php
/**
 * Fichero: BiciElectrica.php 
 * Implementa la clase para la gestión de bicicletas eléctricas.
 */
class BiciElectrica {

    // Atributos privados 
    private int $id;        // Identificador de la bicicleta (entero) [cite: 9]
    private int $coordx;    // Coordenada X (entero) [cite: 10]
    private int $coordy;    // Coordenada Y (entero) [cite: 11]
    private int $bateria;   // Carga de la batería en tanto por ciento (entero) [cite: 12]
    private int $operativa; // Estado de la bicicleta (true operativa - false no disponible) [cite: 13]

    /**
     * Constructor para inicializar el objeto BiciElectrica.
     * 
     */
    public function __construct($id, $coordx, $coordy, $bateria, $operativa) {
        $this->id = (int)$id;
        $this->coordx = (int)$coordx;
        $this->coordy = (int)$coordy;
        $this->bateria = (int)$bateria;
        $this->operativa = ((int)$operativa === 1);
    }

    /**
     * Métodos mágicos setter y getter 
     */
    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    /**
     * Método __ToString 
     * Devuelve el id de la bicicleta y el estado de la batería.
     */
    public function __toString() {
        return "Identificador: $this->id Bateria $this->bateria %";
    }

    /**
     * Devuelve la distancia entre las coordenadas pasadas como parámetro
     * y las coordenadas de la bicicleta. 
     * Se aplica la fórmula de distancia entre dos puntos. 
     */
    public function distancia($x, $y) {
        //COMPLETAR ---------------- formula de distancia entre do sbicicletas y saber cual esta mas cerca de las coords
        $dx = (int)$x - $this->coordx;
        $dy = (int)$y - $this->coordy;
        return sqrt(($dx * $dx) + ($dy * $dy));
    }
}

