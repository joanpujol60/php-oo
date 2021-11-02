<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N2Exercici1</title>
</head>
<body>
    <?php
    // definicio clase
    class PokerDice{
        // atributs de classe
        private $numero;
        private $nomcara;
        private $totalTiradas;
        
        // metodes de classe
        public function initialize(){
          
        }
        public function throw(){
            $this->numero=(rand(0, 5));
         
        }
        public function shapeName(){
  
            if ($this->numero == '0'){
                $this->nomcara = 'A';
            } else if ($this->numero == '1'){
                $this->nomcara = 'K';
            } else if ($this->numero == '2'){
                $this->nomcara = 'Q';
            } else if ($this->numero == '3'){
                $this->nomcara = 'J';
            } else if ($this->numero == '4'){
                $this->nomcara = '8';
            } else{
                $this->nomcara = '7';
            }
            echo 'Tirada amb resultat ' . $this->nomcara;
            $this->totalTiradas = $this->totalTiradas + 1;
           }
        public function getTotalThrows(){
           
            echo 'Total tiradas ' . $this->totalTiradas;
         
        }
       
       
    }
    // creacio i asignacio d'objectes
    echo 'Dau 1';
    echo '<br>';
    $tirada =new PokerDice();
    $tirada->throw();
    $tirada->shapeName();
    echo '<br>';
    echo 'Dau 2';
    echo '<br>';
    $tirada->throw();
    $tirada->shapeName();
    echo '<br>';
    echo 'Dau 3';
    echo '<br>';
    $tirada->throw();
    $tirada->shapeName();
    echo '<br>';
    echo 'Dau 4';
    echo '<br>';
    $tirada->throw();
    $tirada->shapeName();
    echo '<br>';
    echo 'Dau 5';
    echo '<br>';
    $tirada->throw();
    $tirada->shapeName();
    echo '<hr>';
    $tirada->getTotalThrows();
   
    
    ?>
</body>
</html>