<x-layout.main>
    <div class="w-screen h-screen flex flex-col items-center mt-10">
        <div class="overflow-x-auto bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg">
            <table class="table">
                <thead class="text-center">
                <tr class="space-x-3">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody class="w-full lg:w-fit text-center">
                @foreach ($doctors as $doctor)
                    <tr>
                        <th>{{ $doctor->id }}</th>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->dni }}</td>
                        <td class="inline-flex justify-center space-x-1.5">
                            <a href="{{ route('doctor.show', $doctor) }}" class="btn btn-outline btn-info">
                                <x-heroicon-o-eye
                                    class="w-6 h-6"/>
                            </a>
                            <a href="{{ route('doctor.edit', $doctor) }}" class="btn btn-outline btn-warning">
                                <x-heroicon-o-pencil-square
                                    class="w-6 h-6"/>
                            </a>

                            <!-- Delete button (with confirmation) -->
                            <form action="{{ route('doctor.destroy', $doctor) }}" method="POST"
                                  style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline btn-error"
                                        onclick="return confirm('¿Está seguro de eliminar este doctor?')">
                                    <x-heroicon-o-trash
                                        class="w-6 h-6"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('doctor.create') }}"
           class="btn btn-outline btn-success fixed w-fit bottom-0 right-0 mb-10 sm:mb-5 m-2 p-2">Registrar un nuevo doctor
            <x-heroicon-o-user class="w-6 h-6"/>
        </a>
        {{$doctors->links()}}
    </div>
</x-layout.main>    