<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Registro de productos</h3>
        <form method="POST">
            Digite una oracion :<input type="text" name="palabra" required autofocus/>
            <button type="submit">Ejecutar</button>
            <br><button> <a href="?reset=1">Reiniciar</a></button>
        </form>
        <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $palabra = $_POST['palabra'];
            palabra_invertidas($palabra);
            palabra_sin_i($palabra);
            if (isset($_GET['reset'])) {
                session_destroy();
                header("Location: index.php");
                exit();
            }
        }

        function palabra_invertidas($palabra) {
            $voltear = strrev($palabra);
            $separar = explode(' ', $voltear);
            $palabra_final = [];

            foreach ($separar as $invertida) {

                if (stripos($invertida, "t") !== False) {
                    $palabra_final[] = $invertida;
                }
                if (stripos($invertida, "on") !== False) {
                    $palabra_final[] = $invertida;
                }
                if (substr($invertida, -3, 1) !== 'i') {
                    $palabra_sin_i[] = $invertida;
                }
            }
            sort($palabra_final);
            echo '<br>Palabras invertidas y ordenadas alfabeticamente <br>';
            echo 'de la oracion que contenga la silaba ON o la letra T<br>';
            echo '';
            echo '<textarea rows="10" cols="30" readonly>';
            foreach ($palabra_final as $final) {
                echo $final . "\n";
            }
            echo '</textarea>';
        }

        function palabra_sin_i($palabra) {
            $separar = explode(' ', $palabra);
            $palabra_sin_i = [];

            foreach ($separar as $invertida) {
                if (substr($invertida, -3, 1) !== 'i' and strlen($invertida) > 2) {
                    $palabra_sin_i[] = $invertida;
                }
            }
            echo "<div style='text-align: right;height: 10vh;width: 80%;justify-content: flex-end;'>";
            echo '<br>Palabras de la oracion donde<br>';
            echo 'La antepenultima letra NO sea una I(i)<br>';
            echo '';
            echo '<textarea rows="10" cols="30" readonly>';
            foreach ($palabra_sin_i as $sin_i) {
                echo $sin_i . "\n";
            }
            echo '</textarea>';
            echo '</div>';
        }
        ?>
    </body>
</html>
