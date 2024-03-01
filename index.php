<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de practica Php</title>
    </head>
    <body>
        <form method="post">
            Digite el numero para la tabla de multiplicar<input type="number" name="numero1" autofocus/><br>

            <input name="enviar" type="submit" value="Enviar"/> 

        </form>

        <?php
        if (isset($_POST['enviar'])) {

            $numero1 = intval($_POST['numero1']);

            echo '<fieldset><legend>Procedimientos</legend>';
            sacara_numero($numero1);
            echo '</fieldset>';
        }

        function sacara_numero($numero1) {
            $conteo = [];
            
            for ($i = 1; $i <= 9; $i++) {
                $conteo[] = $i * $numero1;
            }
            echo 'Los numeros desde el inicial hasta el final son <br>';
            foreach ($conteo as $valor) {

                echo $valor . '<br>';
            }
        }
        ?>
    </body>
</html>
