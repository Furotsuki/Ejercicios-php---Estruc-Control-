<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de practica Php</title>
    </head>
    <body>
        <form method="post">
            Digite una palabra<input type="text" name="numero1" autofocus/>

            <input name="enviar" type="submit" value="Enviar"/> 

        </form>

        <?php
        if (isset($_POST['enviar'])) {

            $numero1 = $_POST['numero1'];
            echo '<fieldset><legend>Procedimientos</legend>';
            sacara_numero($numero1);
            echo '</fieldset>';
        }

        function sacara_numero($frase) {

            // Contar vocales en mayúsculas
            $vocales_mayusculas = str_split('AEIOU');
            $contador_mayusculas = array_fill_keys($vocales_mayusculas, 0);

            // Contar vocales en minúsculas
            $vocales_minusculas = str_split('aeiou');
            $contador_minusculas = array_fill_keys($vocales_minusculas, 0);

            // Procesar cada letra de la frase
            for ($i = 0; $i < strlen($frase); $i++) {
                $letra = $frase[$i];
                if (in_array($letra, $vocales_mayusculas)) {
                    $contador_mayusculas[$letra]++;
                } 
                if (in_array($letra, $vocales_minusculas)) {
                    $contador_minusculas[$letra]++;
                }
            }

            // Imprimir resultados
            echo "<h2>Vocales en Mayúsculas:</h2>";
            foreach ($contador_mayusculas as $vocal => $cantidad) {
                echo "$vocal: $cantidad<br>";
            }

            echo "<h2>Vocales en Minúsculas:</h2>";
            foreach ($contador_minusculas as $vocal => $cantidad) {
                echo "$vocal: $cantidad<br>";
            }
        }
        ?>
    </body>
</html>
