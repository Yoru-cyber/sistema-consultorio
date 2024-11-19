<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('patient.store') }}"
            class="flex flex-col items-center space-y-2.5 bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg p-5" method="POST">
            @csrf
            @method('POST')
            <div class="flex flex-row justify-around items-center space-x-2 w-full">
                <!-- Nombre -->
                <span>
                    <label for="name" class="input input-bordered flex items-center gap-2">
                        <x-heroicon-s-user-circle class="w-5" />
                        <input type="text" name="name" id="name" class="grow" value="{{old('name')}}" placeholder="Nombre Completo" required
                            maxlength="255">
                    </label>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </span>
                <!-- Sexo -->
                <div>
                    <select name="sex" id="sex" class="select select-bordered w-full max-w-xs" required>
                        <option disabled selected>Sexo</option>
                        <option value="Masculino" {{ old(key: 'sex') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ old('sex') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                    @error('sex')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Edad -->
                <div>
                    <label for="age" class="input input-bordered flex items-center gap-2">
                        <x-heroicon-o-numbered-list class="w-5" />
                        <input type="number" name="age" id="age" class="grow" placeholder="Edad"
                            value="{{ old('age') }}" required min="0" max="120">
                    </label>
                    @error('age')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="flex flex-row justify-between items-center space-x-2 w-full">
                <!-- DNI (Cédula) -->
                <span class="w-full">
                    <label for="dni" class="input input-bordered flex items-center gap-2">
                        <x-heroicon-s-identification class="w-5" />
                        <input type="number" name="dni" id="dni" class="grow" value="{{old('dni')}}" placeholder="Cédula" required
                            min="10000000" max="99999999999999999999">
                    </label>
                    @error('dni')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </span>
                <!-- Fecha de Nacimiento -->
                <span>
                    <label for="birthday" class="input input-bordered flex items-center gap-2">
                        <input type="date" name="birthday" id="birthday" class="grow" value="{{ old('birthday') }}"
                            required>
                    </label>
                    @error('birthday')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </span>

            </div>
            <!-- Correo Electrónico -->
            <div class="w-full">
                <label for="email" class="input input-bordered flex items-center gap-2">
                    <x-heroicon-c-envelope class="w-5" />
                    <input type="email" name="email" id="email" class="grow" placeholder="Correo"
                        value="{{ old('email') }}" required>
                </label>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Dirección -->
            <div class="w-full">
                <label for="address" class="input input-bordered flex items-center gap-2">
                    <x-heroicon-s-home-modern class="w-5" />
                    <input type="text" name="address" id="address" class="grow" placeholder="Dirección"
                        value="{{ old('address') }}" required maxlength="255">
                </label>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="flex flex-row justify-center items-center space-x-2">
                <!-- Número de Teléfono -->
                <div>
                    <label for="phone_number" class="input input-bordered flex items-center gap-2">
                        <x-heroicon-s-phone class="w-5 h-5" />
                        <input type="text" name="phone_number" id="phone_number" class="grow" placeholder="Teléfono"
                            value="{{ old('phone_number') }}" required maxlength="20">
                    </label>
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Número de Teléfono de Emergencia -->
                <span>
                    <label for="emergency_phone_number" class="input input-bordered flex items-center gap-2">
                        <x-heroicon-s-phone class="w-5 h-5" />
                        <input type="text" name="emergency_phone_number" id="emergency_phone_number" class="grow"
                            placeholder="Teléfono de Emergencia" value="{{ old('emergency_phone_number') }}" required
                            maxlength="20">
                    </label>
                    @error('emergency_phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </span>

            </div>

            <!-- Botón de envío -->
            <div>
                <button type="submit" class="btn btn-primary">Guardar Paciente</button>
            </div>
        </form>
    </div>

</x-layout.main>