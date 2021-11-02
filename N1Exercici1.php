<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1Exercici1</title>
</head>
<body>
    <?php
    // definicio clase
    class Employee{
        // atributs de classe
        private $nomcla;
        private $soucla;
        
        // metodes de classe
        public function initialize($nom,$sou){
            $this->nomcla=$nom;
            $this->soucla=$sou;
        }
        public function print(){
            echo 'Nom : ' . $this->nomcla . ' Salari : ' . $this->soucla;
         
            if ($this->soucla > 6000){
                echo ' Cal pagar impostos';
            } else {
                echo ' No cal pagar impostos';
            }
            echo '<br>';
        }
       
       
    }
    // creacio i asiginacio d'objectes
    $empleat =new Employee();
    $empleat->initialize("Joan",2000);
    $empleat->print();
    $empleat2 =new Employee();
    $empleat2->initialize("Marta",7000);
    $empleat2->print();
    ?>
</body>
</html>