<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('doctor.store') }}"
              class="bg-indigo-100 rounded-lg p-5 flex flex-col items-center space-y-2.5" method="POST">
            @csrf
            @method('POST')
            <!-- Nombre -->
            <div>
                <label for="name" class="input input-bordered flex items-center gap-2">
                    <input type="text" name="name" id="name" class="grow" placeholder="Nombre Completo"
                           required
                           maxlength="255">
                </label>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- DNI (Cédula) -->
            <div>
                <label for="dni" class="input input-bordered flex items-center gap-2">
                    <input type="number" name="dni" id="dni" class="grow" placeholder="Cédula"
                           required
                           min="10000000" max="99999999999999999999">
                </label>
                @error('dni')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Botón de envío -->
            <div>
                <button type="submit" class="btn btn-primary">Guardar Paciente</button>
            </div>
        </form>
    </div>

</x-layout.main>
