<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->patient->name }}</title>
</head>
<body>  
     <header>
        <div class="logo">
            <img  src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/logo.png')))}}" alt="logo clinica">
        </div>
    <div class="receta">
        <div class="nombre-doctor">Dr. {{ $recipe->doctor->name }}</div>
        <div class="especialidad">PEDIATRA - INTENSIVISTA</div>
        <div class="especialidad">M.S.A.S. 35134</div>
        <div class="contacto">Centro Comercial El Rincón, vía Alberto Revel</div>
        <div class="contacto">a 50 mts, de la Plaza El Rincón</div>
        <div class="contacto">Teléfonos: 0212-325.9213 / 0414-308.3017</div>
        </div>
        <hr>
    </header> 

        <div>{{ $recipe->patient->name }}   {{ $recipe->patient->dni }}</div>
        <div>Indicaciones: {{ $recipe->prescription }}</div>

        <div class="firma">
            <hr>
           <p>Firma Dr. {{ $recipe->doctor->name }}</p> 
        </div>

<footer>
        FECHA: {{ $recipe->date }}
</footer>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: left;
    }

    header {
        padding: 10px;
        text-align: left;
        /* Alineación del texto */
    }

    .logo {
        display: inline-block;
        vertical-align: middle;
        /* Alineación vertical */
        margin-right: 20px;
        /* Espacio entre logo y texto */
    }

    .logo img {
        width: 125px;
        height: 125px;
    }

    .receta {
        display: inline-block;
        vertical-align: middle;
        /* Alineación vertical */
    }

    .nombre-doctor {
        font-weight: bold;
        font-size: 18px;
    }

    .especialidad {
        font-size: 14px;
    }

    .contacto {
        font-size: 12px;
    }

    .firma {
        font-size: 18px;
        position: absolute;
        bottom: 0;
        right: 0;
        padding: 10px;
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
</style>
</body>
</html>