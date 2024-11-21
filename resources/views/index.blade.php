<x-layout.main>
    <div class="flex flex-col w-screen h-screen m-5">
        <div class="flex flex-row items-center justify-center space-x-2 w-full lg:h-1/2">
            <img class="w-64 h-64" src="img/logo_color.webp">
            <h1 class="text-6xl tracking-tighter font-bold">Centro Clínico Popular El Rincón</h1>
        </div>
        <div class="flex flex-col justify-center w-full lg:h-1/2">
            <div class="flex flex-row flex-wrap justify-center space-x-2 space-y-5 lg:space-y-0">
                <div
                    class="flex flex-col justify-center bg-blue-50 shadow-lg shadow-blue-400 h-36 rounded-md btn btn-ghost w-64">
                    <a href="{{route('patient.create')}}"
                        class="inline-flex justify-center text-lg font-medium items-center tracking-tighter w-full h-full">
                        Registrar Paciente
                        <x-heroicon-o-users class="w-8 h-8  mx-2" />
                    </a>
                </div>
                <div
                    class="flex flex-col justify-center bg-blue-50 shadow-lg shadow-blue-400 h-36 rounded-md btn btn-ghost w-64">
                    <a href="{{route('recipe.create')}}"
                        class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter w-full h-full">
                        Recetar Recipe
                        <x-healthicons-o-i-note-action class="w-8 h-8 mx-2" />
                    </a>
                </div>
                <div
                    class="flex flex-col justify-center bg-blue-50 shadow-lg shadow-blue-400 h-36 rounded-md btn btn-ghost w-64">
                    <a href="{{route('certificate.create')}}"
                        class="inline-flex justify-center text-lg font-medium  items-center tracking-tighter w-full h-full">
                        Crear Constancia
                        <x-healthicons-o-i-certificate-paper class="w-8 h-8 " />
                    </a>
                </div>
                <div
                    class="flex flex-col justify-center bg-blue-50 shadow-lg shadow-blue-400 h-36 rounded-md btn btn-ghost w-64">
                    <a href="{{route('appointment.create')}}"
                        class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter w-full h-full">
                        Agendar Cita
                        <x-healthicons-o-i-schedule-school-date-time class="w-8 h-8 " />
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout.main>