<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$recipe->patient->name}}</title>
</head>

<body>
    <p style="font-size: x-large">Clínica</p>
    <p>{{ $recipe->patient->name }}</p>
    <p>{{ $recipe->patient->dni }}</p>
    <p>Dr. {{ $recipe->doctor->name }}</p>
    <p>{{ $recipe->date }}</p>
    <p>{{ $recipe->prescription }}</p>
    <style>
        * {
            color: black;
            text-align: center;
        }
    </style>

</body>

</html>