<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

    class Persona {
        // Atributos
        protected $nombre;
        protected $edad;
        // Metodos
        public function __construct($n,$e) 
        {
            $this->nombre = $n;
            $this->edad = $e;
        }
        
        public function printPersonal() 
        {
            echo $this->nombre.", ".$this->edad."<br><br>";
        }
    }


    class Empleado extends Persona {
        // Atributos
        protected $sueldo;
        // Metodos
        public function __construct($n,$e,$s)
        {
            Persona::__construct($n,$e); // Metodo que sobreescribe (Ejercicio 6)
            $this->sueldo = $s;
        }
        public function sueldoPrint()
        {
            echo $this->sueldo." de sueldo tiene el empleado ".$this->nombre."<br><br>";
        }
    }

$persona1 = new Persona("Martin", 25);
$persona1->printPersonal();

$empleado1 = new Empleado("Victor", 30, 2000);
$empleado1->printPersonal();
$empleado1->sueldoPrint();

    
    
    ?>
</body>
</html>