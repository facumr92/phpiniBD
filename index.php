<?php include("db.php"); ?>

<?php include("header.php"); ?>
<!-- 
<script>
swal("Oops!", "Something went wrong on the page!", "error");
</script>-->
<br><br><br><br><br>

    <section class=" ">
<form action="crearentrada.php" class="formulario sombra" method="POST">
  <fieldset>
      <legend>Ingresar una entrada</legend>
      <br>
       <div class="campos">
           <label >Titulo</label>
        <input type="text" placeholder="Escribe un titulo" class="input-text" name="titulo" required>
        </div>

        <div class="campos">
        <label > Mensaje</label>
        <textarea class="input-text" name="mensaje" required  maxlength=""></textarea>
        </div>
        <br>
       <div class="envio boton">
        <input class=" boton " type="submit" value="Enviar" name="envio" placeholder="Escribe un mensaje">
    
</fieldset>
</form>
</section>
<br>

<div class="  sombra entradas">

<h1> Ultimas entradas</h1>

<?php

$resultado= mysqli_query($con, "SELECT * FROM entrada");


while($entradas= mysqli_fetch_object($resultado))
{

    ?>
    <b>(<?php echo($entradas->fecha); ?> ) </b>
    <b> Anónimo dijo:</b> <br>
    <b> <?php echo ($entradas->titulo); ?> </b> 
    <br>
    <?php echo ($entradas->mensaje); ?> 
<hr>

<?php
}

?>

</div>

<?php include("footer.php"); ?>
