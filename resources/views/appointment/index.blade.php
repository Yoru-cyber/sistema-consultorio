<x-layout.main>
    <div class="w-screen h-screen flex flex-col items-center mt-10">
        <div
            class="overflow-x-auto bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg">
            <table class="table">
                <thead class="text-center">
                    <tr class="space-x-3">
                        <th>ID</th>
                        <th>Paciente</th>
                        <th>Cédula</th>
                        <th>Doctor</th>
                        <th>Fecha de Cita</th>
                        <th>Razón</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="w-full lg:w-fit text-center">
                    @foreach ($appointments as $appointment)
                        <tr>
                            <th>{{ $appointment->id }}</th>
                            <td>{{ $appointment->patient->name }}</td>
                            <td>{{ $appointment->patient->dni }}</td>
                            <td>Dr. {{ $appointment->doctor->name }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>
                                <p class="w-32 truncate">{{ $appointment->reason }}</p>
                            </td>
                            <td class="inline-flex justify-center space-x-1.5">
                                <a href="{{ route('appointment.show', $appointment) }}" class="btn btn-outline btn-info">
                                    <x-heroicon-o-eye class="w-6 h-6" />
                                </a>
                                <a href="{{ route('appointment.edit', $appointment) }}" class="btn btn-outline btn-warning">
                                    <x-heroicon-o-pencil-square class="w-6 h-6" />
                                </a>
                                <!-- Delete button (with confirmation) -->
                                <form action="{{ route('appointment.destroy', $appointment) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline btn-error"
                                        onclick="return confirm('¿Está seguro de eliminar este appointment?')">
                                        <x-heroicon-o-trash class="w-6 h-6" />
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('appointment.create') }}"
            class="btn btn-outline btn-success fixed w-fit bottom-0 right-0 mb-10 sm:mb-5 m-2 p-2">Nueva Cita
            <x-heroicon-o-document-plus class="w-6 h-6" />
        </a>
        {{$appointments->links()}}
    </div>

    <!-- Pagination Links (if you're using pagination) -->
    {{-- <div class="d-flex justify-content-center">--}}
        {{-- {{ $patients->links() }}--}}
        {{-- </div>--}}

</x-layout.main>