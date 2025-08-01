

<?php include("header.php"); ?>


<br><br><br>
<section>

<form action="login.php" class="formulario sombra" method="POST">
  <fieldset>
      <legend style="font-size: 3rem; ">Ingresar al blog</legend>
      <br>
       <div class="campos">
           <label >Usuario</label>
        <input type="text" placeholder="Escribe tu usuario" class="input-text" name="usr" required>
        </div>

        <div class="campos">
        <label > Contraseña</label>
      <input type="password" placeholder="Escribe la contraseña " class="input-text" name="password" required>
        </div>
        <br>
       <div class="envio boton">
        <input class=" boton " type="submit" value="Ingresar" name="envio">
       </div>
       <div class="envio boton">
        <input class=" boton " type="button" value="Registrarse" onclick="location.href= 'datos.php'">
       </div>
</fieldset>
</form>
</section>

<footer class="footero"> </footer>
