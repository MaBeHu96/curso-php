<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva esion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la peticion 
    y guardamos el resultado
*/
$result = curl_exec($ch);

// otra alternativa sería utiñizar file_get_contents
// $result = file_get_contents(API_URL);  // funciona si solo quiero hacer un GET fe la API
// y otra alternativa podria ser ver directamente el json 
// $result = json_decode(file_get_contents(API_URL), true); // si quiero hacer un GET
// y obtener el resultado en formato JSON y convertirlo a un array PHP


$data = json_decode($result, true);
curl_close($ch);

?>

<head>  
    <meta charset="UTF-8">
    <title>La próxima pelicula de Marvel </title>
    <meta name="description" content="La proxima pelicula de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale= 1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>
<meta>

<main>
    <h1>La próxima película de Marvel</h1>
    <!--
    DEJO COMENTADO ESTA LINEA PORQUE ES PARA PODER VER QUE ES LO QUE TRAE LA API 
    <pre style="font-size: 10px; overflow: scroll; height: 100pxpx">
    ?php var_dump($data);?>
    </pre>
    -->
    <section>
        <img 
        src="<?= $data["poster_url"]; ?>" width="200"  alt="Poster de <?= $data["title"]?>"
        style="border-radius: 16px"
        >
    </section>

    <hgroup>
        <h3><?= $data["title"];?> se estrena en <?=$data["days_until"];?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>

</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    } 

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column; 
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }

</style>