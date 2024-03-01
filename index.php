<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de practica Php</title>
    </head>
    <body>
        <form method="post">
            Digite un numero<input type="number" name="numero1" autofocus/>

            <input name="enviar" type="submit" value="Enviar"/> 

        </form>

        <?php
        if (isset($_POST['enviar'])) {

            $numero1 = intval($_POST['numero1']);
            echo gettype($numero1);
            echo '<fieldset><legend>Procedimientos</legend>';
            sacara_numero($numero1);
            echo '</fieldset>';
        }

        function sacara_numero($frase) {
            $contar = 0;
            for ($i = 1; $i <= $frase; $i++) {
                if ($frase % $i == 0) {
                    $contar++;
                }
            }
            if ($contar > 2 or $contar < 2) {
                echo 'El numero ' . $frase . ' no es primo';
            } else {
                if ($contar == 2) {
                    echo 'El numero ' . $frase . ' es primo';
                }
            }
        }
        ?>
    </body>
</html>
