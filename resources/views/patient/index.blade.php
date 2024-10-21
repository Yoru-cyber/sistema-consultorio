<x-layout.main>
    <div class="w-screen h-screen flex flex-col items-center mt-10">
        <div class="overflow-x-auto bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg">
            <table class="table">
                <thead class="text-center">
                <tr class="space-x-3">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Sexo</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                    <th>Número de Teléfono</th>
                    <th>Teléfono de Emergencia</th>
                    <th>Edad</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody class="w-full lg:w-fit text-center">
                @foreach ($patients as $patient)
                    <tr>
                        <th>{{ $patient->patient_id }}</th>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->dni }}</td>
                        <td>{{ $patient->sex }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone_number }}</td>
                        <td>{{ $patient->emergency_phone_number }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->birthday->format('d/m/Y') }}</td>
                        <td class="inline-flex justify-center space-x-1.5">
                            <a href="{{ route('patient.show', $patient) }}" class="btn btn-outline btn-info">
                                <x-heroicon-o-eye
                                    class="w-6 h-6"/>
                            </a>
                            <a href="{{ route('patient.edit', $patient) }}" class="btn btn-outline btn-warning">
                                <x-heroicon-o-pencil-square
                                    class="w-6 h-6"/>
                            </a>

                            <!-- Delete button (with confirmation) -->
                            <form action="{{ route('patient.destroy', $patient) }}" method="POST"
                                  style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline btn-error"
                                        onclick="return confirm('¿Está seguro de eliminar este paciente?')">
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
        {{$patients->links()}}
    </div>

    <!-- Pagination Links (if you're using pagination) -->
    {{--    <div class="d-flex justify-content-center">--}}
    {{--        {{ $patients->links() }}--}}
    {{--    </div>--}}

</x-layout.main>
