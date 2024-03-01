<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de practica Php</title>
    </head>
    <body>
        <form method="post">
            Digite el primer numero<input type="number" name="numero1" autofocus/><br>
            Digite el primer segundo<input type="number" name="numero2" />

            <input name="enviar" type="submit" value="Enviar"/> 

        </form>

        <?php
        if (isset($_POST['enviar'])) {

            $numero1 = intval($_POST['numero1']);
            $numero2 = intval($_POST['numero2']);

            echo '<fieldset><legend>Procedimientos</legend>';
            if ($numero2 > $numero1) {
                sacara_numero($numero1, $numero2);
            }else{
                echo 'El numero 2 debe ser mayor al numero 1';
            }
            echo '</fieldset>';
        }

        function sacara_numero($numero1, $numero2) {
            $conteo = [];
            $mover = 0;
            for ($i = $numero1; $i <= $numero2; $i++) {
                $conteo[] = $i;
            }
            echo 'Los numeros desde el inicial hasta el final son ';
            foreach ($conteo as $valor) {

                echo $valor . '<br>';
            }
        }
        ?>
    </body>
</html>
