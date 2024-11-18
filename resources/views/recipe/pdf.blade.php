<style>
    body {
        font-family: Arial, sans-serif; /* Puedes reemplazar Arial por la fuente que más se asemeje */
        text-align: left;
    }
    .logo {
    text-align: center;
}
    .logo img {
    max-width: 100%; /* Asegura que el logo no exceda el ancho del contenedor */
    height: auto;    /* Mantiene la proporción del logo */
    display: inline-block; /* Asegura que el img se trate como un bloque en línea */
    margin: 0 auto;  /* Agrega margen automático para centrar */
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
footer{
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
}
</style>
<body>  
     <header>
        <div class="logo">
            <img  src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/logo.png')))}}" class="w-5 h-5" alt="logo clinica">
        </div>
        <br>
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

        <div>Nombre Paciente:{{ $recipe->patient->name }} </div>
        <div>Cedula: {{ $recipe->patient->dni }}</div>
        <div>Indicaciones: {{ $recipe->prescription }}</div>

<footer>
        FECHA: {{ $recipe->date }}
</footer>   
</body>