<!-- HTML document declaration -->
<!DOCTYPE html>

<!-- Start of HTML document with the 'en' (English) language attribute -->
<html lang="en">
    <head>
        <!-- Metadata section with character encoding specification -->
        <meta charset="UTF-8">

        <!-- Title of the webpage -->
        <title>Ejercicio 7</title>

        <!-- Link to an external stylesheet located in the './css' directory -->
        <link rel="stylesheet" href="../css/index.css">

        <!-- Link to Bootstrap CSS library hosted on a CDN with integrity and crossorigin attributes -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <!-- Start of the main content container with class 'contenedor' -->
        <div class="contenedor">
            <!-- Main content area with class 'main' -->
            <main class="main">
                <!-- Main heading with class 'main__h1' -->
                <h1 class="main__h1">Ejercicios UT3_2 - Arrays</h1>

                <!-- Author information paragraphs with class 'main__text' -->
                <p class="main__text"><strong>Nombre:</strong> Diego Rubio Serrano</p>
                <p class="main__text"><strong>Curso:</strong> 2º DAW</p>
                <p class="main__text"><strong>Módulo:</strong> Desarrollo Web en Entorno Servidor (DWES)</p>

                <!-- Unordered list with Bootstrap's 'nav' and 'nav-tabs' classes -->
                <ul class="nav nav-tabs">
                    <!-- List item with class 'nav-item' and an active link to 'Ejercicio 1' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php">Ejercicio 1</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 2' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio2.php">Ejercicio 2</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 3' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio3.php">Ejercicio 3</a>
                    </li>

                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 4' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio4.php">Ejercicio 4</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 5' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio5.php">Ejercicio 5</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 6' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio6.php">Ejercicio 6</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 7' -->
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    
                    <!-- List item with class 'nav-item' and a link to 'Ejercicio 8' -->
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/ejercicio8.php">Ejercicio 8</a>
                    </li>
                </ul>
                <h3 class="h3">Ejercicio 7</h3>
                <div class="section">
                    <?php
                        // Step 1: Initialize an array of 50 elements with random values ​​between 1 and 10
                        $miArray = array();

                        for ($i = 0; $i < 50; $i++) {
                            $valorAleatorio = rand(1, 10);
                            $miArray[] = $valorAleatorio;
                        }

                        // Step 2: Show the original array
                        echo "Array original:<br>";
                        print_r($miArray);

                        // Step 3: Replace values ​​less than 5 with the string "fail"
                        for ($i = 0; $i < count($miArray); $i++) {
                            if ($miArray[$i] < 5) {
                                $miArray[$i] = "suspenso";
                            }
                        }

                        // Step 4: Show the modified array
                        echo "<br><br>Array modificado:<br>";
                        print_r($miArray);
                    ?>

                </div>
            </main> <!-- End of the main content area -->
        </div> <!-- End of the main content container -->

        <!-- Include Bootstrap JavaScript library from CDN with integrity and crossorigin attributes -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html> <!-- End of the HTML document -->
