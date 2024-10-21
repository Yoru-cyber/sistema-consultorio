<nav
    class="flex flex-row flex-wrap justify-center items-center space-x-5 p-2 text-zinc-800 border-solid border-2 shadow-sm rounded-lg mb-5">
    <a class="inline-flex items-center text-blue-700 text-xl tracking-tighter font-bold" href="{{route('index')}}">Sistema
        Consultorio
        <x-healthicons-f-hospice class="w-10 h-10 mx-2"/>
    </a>
    <a href="{{route('patient.index')}}"
       class="inline-flex justify-center text-lg font-medium items-center tracking-tighter btn btn-ghost">
        Pacientes
        <x-heroicon-o-users class="w-8 h-8  mx-2"/>
    </a>
    <a class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter btn btn-ghost">
        Recipes
        <x-heroicon-o-book-open class="w-8 h-8 mx-2"/>
    </a>
    <a class="inline-flex justify-center text-lg font-medium  items-center tracking-tighter btn btn-ghost">
        Constancias
        <x-heroicon-o-bookmark class="w-8 h-8 "/>
    </a>
    <a class="inline-flex justify-center text-lg font-medium  items-center  tracking-tighter btn btn-ghost">
        Citas
        <x-heroicon-o-calendar class="w-8 h-8 "/>
    </a>
</nav>
