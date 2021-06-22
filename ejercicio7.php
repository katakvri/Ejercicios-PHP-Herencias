<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    class Electrodomestico
    {
        protected $precio;
        protected $color;
        protected $consumo;
        protected $peso;

        public function __construct($precio = "100", $peso = "5", $cons = "F", $col = "blanco") 
        {
            $this->precio = $precio;
            $this->color = $col;
            $this->consumo = $cons;
            $this->peso = $peso;
        }

        public function comprobarConsumoEnergetico($letra) 
        {
            switch ($letra) {
                case 'A':
                    echo "su consumo es de letra A lo que esta valorada en 100";
                    break;
                case 'B':
                    echo "su consumo es de letra B lo que esta valorada en 80";
                    break;
                case 'C':
                    echo "su consumo es de letra C lo que esta valorada en 60";
                    break;
                case 'D':
                    echo "su consumo es de letra D lo que esta valorada en 50";
                    break;
                case 'E':
                    echo "su consumo es de letra E lo que esta valorada en 30";
                    break;
                case 'F':
                    echo "su consumo es de letra F lo que esta valorada en 10";
                    break;
                default:
                    echo "No se ha indicado correctamente la letra del consumo energetico";
                    break;
            }
        }
        
        public function comprobarColor($color) 
        {
            
            switch (strtolower($color)) {
                case 'blanco':
                    echo "Esta diponible el color Blanco";
                    break;
                case 'negro':
                    echo "Esta diponible el color Negro";
                    break;
                case 'gris':
                    echo "Esta diponible el color Gris";
                    break;
                case 'rojo':
                    echo "Esta diponible el color Rojo";
                    break;
                case 'azul':
                    echo "Esta diponible el color Azul";
                    break;
                default:
                    echo "Este color no existe en el inventario";
                    break;
            }
        }
    }
    
    ?>
</body>
</html>