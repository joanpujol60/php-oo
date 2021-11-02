<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N2Exercici1</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


<?php
    require_once 'classes/account.php';
    $account = new Account('66655-34/RR', 'Pujol, Joan', 15800);
   
?>
<div class="contenidor">
<form class="formulari" action="N3Exercici1b.php" name= "formulari" id="formulari" method="POST">
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
    <label for="">Import</label>
    <input type="text" name="amount" id="">
    <select name="opcio" id="">
        <option value="diposit">Diposit</option>
        <option value="whitdraw">Whitdraw</option>   
    </select>
    <p></p>
    <button class='btn'>Confirmar</button>
</form>
</div>
</body>
</html>