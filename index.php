 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DWEC 9</title>
  
</head>
<body>
<header>
    <h1>Tarea Unidad 8 DWES.</h1>
    <h2>Aplicaciones web híbridas.</h2>
</header>

<main>
</main>
<section>
    <div id="caja">
    <!--
            <h1>Personajes</h1>
            <main></main>
            <script src="index.js"></script> -->
        <?php
        /**
        * Función para obtener personajes desde la API de Rick and Morty.
        *
        * Esta función realiza una solicitud a la API de Rick and Morty para obtener información sobre los personajes.
        *
        * @param callable $done Una función de devolución de llamada que se ejecutará una vez que se hayan obtenido los datos.
        */
        function getCharacters($done){
            $results = file_get_contents("https://rickandmortyapi.com/api/character");
            $data = json_decode($results);
            $done($data);
        }

        /**
        * Función de devolución de llamada para procesar y mostrar los datos de los personajes.
        *
        * Esta función procesa los datos de los personajes obtenidos de la API de Rick and Morty y muestra la información en el formato de artículo HTML.
        *
        * @param object $data Los datos de los personajes obtenidos de la API.
        */
        getCharacters(function($data){
            foreach ($data->results as $personaje){
                echo '<article>
                    <div class="image-container">
                        <img src="' . $personaje->image . '" alt="Personaje">
                    </div>
                    <h2>' . $personaje->name . '</h2>
                    </article>';
            }
        })
        ?>
    </div>
</section>
<footer>
    <p>49030803R - Luis Miguel Barrera</p>
</footer>
</body>
</html>
