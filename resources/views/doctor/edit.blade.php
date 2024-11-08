<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('doctor.update', $doctor) }}" class="bg-indigo-100 rounded-lg p-5 flex flex-col items-center" method="POST">
            @csrf
            @method('PUT')
            <!-- Nombre -->
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{  old('name', $doctor->name) }}"
                       required
                       maxlength="255">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- DNI (Cédula) -->
            <div>
                <label for="dni">Cédula</label>
                <input type="number" name="dni" id="dni" class="form-control" value="{{  old('dni', $doctor->dni )}}"
                       required
                       min="10000000" max="99999999999999999999">
                @error('dni')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          
            <!-- Boton de guardar -->

            <div>
                <button type="submit" class="btn btn-primary">Guardar doctor</button>
            </div>
        </form>
    </div>

</x-layout.main>