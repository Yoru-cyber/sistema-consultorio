<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <div
            class="flex flex-col h-fit w-fit justify-center items-center space-y-2 p-5 shadow-lg shadow-gray-400 rounded-lg">
            @if($patient->sex == 'Masculino')
                <x-heroicon-o-user
                    class="w-10 h-10 text-blue-500"/>
            @else
                <x-heroicon-o-user
                    class="w-10 h-10 text-pink-500"/>
            @endif
            <!-- Nombre -->
            <div>
                <p class="inline-flex items-center justify-center">
                    <x-heroicon-o-pencil-square
                        class="w-6 h-6"/>{{$patient->name}}</p>
            </div>

            <!-- DNI (Cédula) -->
            <div>
                <p class="inline-flex items-center justify-center">
                    <x-heroicon-o-identification
                        class="w-6 h-6"/>{{$patient->dni }}</p>
            </div>

            <!-- Sexo -->
            <div>
                <p class="inline-flex items-center justify-center">
                    <x-healthicons-f-sexual-reproductive-health class="h-10 w-10"/>
                    {{$patient->sex}}</p>
            </div>

            <!-- Correo Electrónico -->
            <div>
                <p class="inline-flex items-center justify-center">
                    <x-heroicon-o-envelope
                        class="w-6 h-6"/> {{$patient->email}}</p>
            </div>

            <!-- Dirección -->
            <div>
                <p class="inline-flex items-center justify-center">
                    {{$patient->address}}
                </p>
            </div>

            <div>
                <p class="inline-flex items-center justify-center">
                    {{$patient->phone_number}}
                </p>
            </div>

            <div>
                <p class="inline-flex items-center justify-center">
                    <x-heroicon-o-phone
                        class="w-6 h-6"/> {{$patient->emergency_phone_number}}
                </p>
            </div>

            <div>
                <p class="inline-flex items-center justify-center">
                    {{$patient->age}}</p>
            </div>

            <!-- Fecha de Nacimiento -->
            <div>
                <p class="inline-flex items-center justify-center">
                    <x-heroicon-o-calendar
                        class="w-6 h-6"/> {{$patient->birthday->format('d-m-Y')}}</p>
            </div>
            <div>
                    @foreach($patient->conditions as $condition)
                        <p class="inline-flex items-center justify-center">{{ $condition->name }}</p>
                    @endforeach
            </div>
        </div>

    </div>

</x-layout.main>
