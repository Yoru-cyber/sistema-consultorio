<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <div>
            <p class="inline-flex items-center justify-center">
                <x-heroicon-o-pencil-square
                    class="w-6 h-6"/>{{$doctor->name}}</p>
        </div>

        <!-- DNI (Cédula) -->
        <div>
            <p class="inline-flex items-center justify-center">
                <x-heroicon-o-identification
                    class="w-6 h-6"/>{{$doctor->dni }}</p>
        </div>
    </x-layout.main>