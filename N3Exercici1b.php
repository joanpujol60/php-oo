<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N2Exercici1b</title>
</head>
<body>
<?php
    require_once 'classes/account.php';
    $account = new Account('66655-34/RR', 'Pujol, Joan', 15800);
    $import=$_POST['amount'];
    $opcion=$_POST['opcio'];
    if($opcion=="diposit"){
        $account->deposit($import);
        $account->set_saldoActual();
    }else{
        if($import< $account->get_saldoActual()){
            $account->withdraw($import);
            $account->set_saldoActual();
        } else{
            echo 'Saldo insuficient. Operació no efectuada';
        }
        
    }
    
    echo'<br>';
    
    echo 'Import ' . $opcion . ":" . $import; 
?>


<form>
    <label for="">Número de Compte</label>
    <input type="text" name="compte" value="<?php echo $account->get_numCompte(); ?>" readonly>
    <br>
    <label for="">Nom i Cognoms</label>
    <input type="text" name="nom" value="<?php echo $account->get_nomCognoms(); ?>" readonly>
    <br>
    <label for="">Saldo Actual</label>
    <input type="text" name="saldo" value="<?php echo $account->get_saldoActual(); ?>" readonly>
    <br>
    <br>
    
</form>

</body>
</html>