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
