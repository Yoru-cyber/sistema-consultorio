<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <div
            class="flex flex-col h-fit w-fit justify-center items-center space-y-2 p-5 shadow-lg shadow-gray-400 rounded-lg">
            <x-healthicons-o-doctor class="w-8 h-8 " />
            <p class="inline-flex items-center justify-center" title="Nombre">
                <x-heroicon-o-pencil-square class="w-6 h-6" />{{$doctor->name}}
            </p>
            <!-- DNI (Cédula) -->
            <p class="inline-flex items-center justify-center" title="Cédula">
                <x-heroicon-o-identification class="w-6 h-6" />{{$doctor->dni }}
            </p>

        </div>
    </div>
</x-layout.main>