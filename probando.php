<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php 
$num1= "";
$num2= "";
$res= "";

if($_POST){
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $res = $num1 + $num2;
}
?>

<div class="container-sm">
    <form action="probando.php" method="POST" class="">
        <div class="form-group">
            <label for="numero1" class="form-label">Número 1:</label>
            <input type="number" id="numero1" class="form-control" name="numero1" required>
        </div>
        <div class="form-group">
            <label for="numero2" class="form-label">Número 2:</label>
            <input type="number" id="numero2" class="form-control" name="numero2" required>
        </div>
        <div class="form-group">
            <input type="submit" id="boton" name="boton" value="Sumar" class="btn btn-primary">
        </div>
    </form>

    <?php if($_POST): ?>
    <div class="form-group">
        <label for="resultado" class="form-label">Resultado:</label>
        <input type="text" id="resultado" class="form-control" value="<?php echo $res; ?>" readonly>
    </div>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
