<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
       <div class="flex flex-col h-fit w-fit justify-center items-center space-y-2 p-5 shadow-lg shadow-gray-400 rounded-lg">
            <x-healthicons-o-i-certificate-paper class="w-10 h-10"/>
            <!-- Nombre -->
            <div>
                <p class="inline-flex items-center justify-center" title="Nombre">
                <x-heroicon-o-user class="w-6 h-6"/>{{ $certificate->patient->name }}
                </p>   
            </div>
            <!-- Cedula -->
            <div>
                <p class="inline-flex items-center justify-center" title="Nombre">
                    <x-heroicon-o-identification class="w-6 h-6" />{{ $certificate->patient->dni }}
                </p>
            </div>
            <!-- Doctor -->
            <div>
                <p class="inline-flex items-center justify-center" title="Doctor">
                    <x-healthicons-o-doctor class="w-6 h-6 " /> Dr. {{ $certificate->doctor->name }}
                </p>
            </div>
            <!-- Fecha de emision -->
            <div>
                <p class="inline-flex items-center justify-center" title="Fecha de emision">
                    <x-heroicon-o-calendar class="w-6 h-6" /> {{ $certificate->date }}
                </p>
            </div>        
            <!-- Descripcion -->
            <div>
                <p class="inline-flex items-center justify-center" title="Descripcion">
                    <x-heroicon-o-document-text class="w-6 h-6" /> {{ $certificate->description}}
                </p>
            </div>
        </div>
    </div>
</x-layout.main>