<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php

    class Operacion {
        // Atributos
        protected $valor1;
        protected $valor2;
        protected $resultado;
        // Metodos
        public function __construct($v1,$v2)
        {
            $this->valor1=$v1;
            $this->valor2=$v2;
        }
        public function imprimirResultado() 
        {
            echo $this->resultado."<br><br>";
        }
    }

    class Suma extends Operacion {
        public function operar()
        {
            $this->resultado = $this->valor1 + $this->valor2;
        }
        // Metodos de sobreescribir (Ejercicio 5)
        public function imprimirResultado()
        {
            echo "El resultado de sumar ".$this->valor1." y ".$this->valor2." es igual a ";
            parent::imprimirResultado();
        }
    }
    
    class Resta extends Operacion {
        public function operar()
        {
            $this->resultado = $this->valor1 - $this->valor2;
        }
        // Metodo de sobreescribir (Ejercicio 5)
        public function imprimirResultado()
        {
            echo "El resultado de restar ".$this->valor1." y ".$this->valor2." es igual a ";
            parent::imprimirResultado();
        }
    }

    $suma = new Suma(15,10);
    $suma->operar();
    $suma->imprimirResultado();

    $resta = new Resta(15,7);
    $resta->operar();
    $resta->imprimirResultado();
    
    ?>
</body>
</html>