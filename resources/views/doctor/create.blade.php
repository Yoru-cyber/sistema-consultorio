<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('doctor.store') }}"
            class="flex flex-col items-center space-y-2.5 bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg p-5"
            method="POST">
            @csrf
            @method('POST')
            <!-- Nombre -->
            <span>
                <label for="name" class="input input-bordered flex items-center gap-2">
                    <x-heroicon-s-user-circle class="w-5" />
                    <input type="text" name="name" id="name" class="grow" value="{{old('name')}}"
                        placeholder="Nombre Completo" required maxlength="255">
                </label>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </span>

            <!-- DNI (Cédula) -->
            <span class="w-full">
                <label for="dni" class="input input-bordered flex items-center gap-2">
                    <x-heroicon-s-identification class="w-5" />
                    <input type="number" name="dni" id="dni" class="grow" value="{{old('dni')}}" placeholder="Cédula"
                        required min="1" max="99999999999999999999">
                </label>
                @error('dni')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </span>

            <!-- Botón de envío -->
            <span>
                <button type="submit" class="btn btn-primary">Guardar Doctor</button>
            </span>
        </form>
    </div>

</x-layout.main>