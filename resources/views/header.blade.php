<nav
    class="flex flex-row flex-wrap justify-center items-center space-x-5 p-2 text-zinc-800 border-solid border-2 shadow-sm rounded-lg mb-5">
    <a class="inline-flex items-center text-blue-700 text-xl tracking-tighter font-bold"
        href="{{route('index')}}">Sistema
        Consultorio
        <x-healthicons-f-hospice class="w-10 h-10 mx-2" />
    </a>
    <a href="{{route('patient.index')}}"
        class="inline-flex justify-center text-lg font-medium items-center tracking-tighter btn btn-ghost">
        Pacientes
        <x-heroicon-o-users class="w-8 h-8  mx-2" />
    </a>
    <a href="{{route('recipe.index')}}"
        class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter btn btn-ghost">
        Recipes
        <x-healthicons-o-i-note-action class="w-8 h-8 mx-2" />
    </a>
    <a href="{{route('certificate.index')}}" class="inline-flex justify-center text-lg font-medium  items-center tracking-tighter btn btn-ghost">
        Constancias
        <x-healthicons-o-i-certificate-paper class="w-8 h-8 " />
    </a>
    <a href="{{route('appointment.index')}}"
        class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter btn btn-ghost">
        Citas
        <x-healthicons-o-i-schedule-school-date-time class="w-8 h-8 " />
    </a>
    <a href="{{route('doctor.index')}}"
        class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter btn btn-ghost">
        Doctores
        <x-healthicons-o-doctor class="w-8 h-8 " />
    </a>
        <a href="{{route('condition.index')}}"
        class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter btn btn-ghost">
        Condiciones
        <x-healthicons-o-virus-research class="w-8 h-8 " />
    </a>
</nav>