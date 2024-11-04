<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('patient.store') }}"
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

            <div class="flex flex-row gap-8">
                <div>
                    <select name="sex" id="sex" class="select select-bordered w-full max-w-xs" required>
                        <option disabled selected>Sexo</option>
                        <option value="Masculino" {{ old('sex') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ old('sex') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                    @error('sex')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="age" class="input input-bordered flex items-center gap-2">
                        <input type="number" name="age" id="age" class="grow" placeholder="Edad"
                               value="{{ old('age') }}"
                               required min="0"
                               max="120">
                    </label>
                    @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="input input-bordered flex items-center gap-2">
                    <input type="email" name="email" id="email" class="grow" placeholder="Correo"
                           value="{{ old('email') }}"
                           required>
                </label>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Dirección -->
            <div>
                <label for="address" class="input input-bordered flex items-center gap-2">
                    <input type="text" name="address" id="address" class="grow" placeholder="Dirección"
                           value="{{ old('address') }}" required
                           maxlength="255">
                </label>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Número de Teléfono -->
            <div>
                <label for="phone_number" class="input input-bordered flex items-center gap-2">
                    <input type="text" name="phone_number" id="phone_number" class="grow" placeholder="Teléfono"
                           value="{{ old('phone_number') }}" required maxlength="20">
                </label>
                @error('phone_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Número de Teléfono de Emergencia -->
            <div>
                <label for="emergency_phone_number" class="input input-bordered flex items-center gap-2">
                    <input type="text" name="emergency_phone_number" id="emergency_phone_number" class="grow"
                           placeholder="Teléfono de Emergencia"
                           value="{{ old('emergency_phone_number') }}" required
                           maxlength="20">
                </label>
                @error('emergency_phone_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Fecha de Nacimiento -->
            <div>
                <label for="birthday" class="input input-bordered flex items-center gap-2">
                <input type="date" name="birthday" id="birthday" class="grow"
                       value="{{ old('birthday') }}"
                       required>
                </label>
                @error('birthday')
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
