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
        echo '<fieldset><legend>Procedimientos</legend>';
        sacara_numero();
        echo '</fieldset>';
        if (isset($_POST['enviar'])) {

            $numero1 = intval($_POST['numero1']);

            echo '<fieldset><legend>Procedimientos</legend>';
            //sacara_numero($numero1);
            echo '</fieldset>';
        }

        function sacara_numero() {
            $conteo = [];
            $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
            for ($i = 1; $i <= 12; $i++) {
                array_fill_keys($dias, $i);
            }
            echo 'Los numeros de la semana son <br>';
            foreach ($dias as $llave => $valor) {

                echo $llave+1 . ' = ' . $valor . '<br>';
            }
        }
        ?>
    </body>
</html>
