<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1Exercici2</title>
</head>
<body>
    <?php
    // definicio clase
    class Shape{
        // atributs de classe
        protected $ample;
        protected $alt;
        protected $area;
        
        // metodes de classe
        public function __construct($am,$al){
            $this->ample=$am;
            $this->alt=$al;
        }
        public function print(){
            echo $this->area;
        }
    }
    //clase triangle
    class Triangle extends Shape{
        //metodes
        public function calcular(){
            $this->area=($this->ample*$this->alt)/2;
        }
    }

    //clase rectangle
    class Rectangle extends Shape{
        //metodes
        public function calcular(){
        $this->area=($this->ample*$this->alt);
    }
}


    // creacio i asiginacio d'objectes
    $triangle =new Triangle(20,10);
    echo 'El area per un triangle es de ';
    $triangle->calcular();
    $triangle->print();
    echo '<br>';
    $triangle =new Rectangle(20,10);
    echo 'El area per un rectangle es de ';
    $triangle->calcular();
    $triangle->print();
   
 
    ?>
</body>
</html>