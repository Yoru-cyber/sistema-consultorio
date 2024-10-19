<form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <!-- Nombre -->
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required maxlength="255">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- DNI (Cédula) -->
    <div>
        <label for="dni">Cédula</label>
        <input type="number" name="dni" id="dni" class="form-control" value="{{ old('dni') }}" required min="10000000" max="99999999999999999999">
        @error('dni')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Sexo -->
    <div>
        <label for="sex">Sexo</label>
        <select name="sex" id="sex" class="form-control" required>
            <option value="male" {{ old('sex') == 'male' ? 'selected' : '' }}>Masculino</option>
            <option value="female" {{ old('sex') == 'female' ? 'selected' : '' }}>Femenino</option>
            <option value="other" {{ old('sex') == 'other' ? 'selected' : '' }}>Otro</option>
        </select>
        @error('sex')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Correo Electrónico -->
    <div>
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Dirección -->
    <div>
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required maxlength="255">
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Número de Teléfono -->
    <div>
        <label for="phone_number">Número de Teléfono</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}" required maxlength="20">
        @error('phone_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Número de Teléfono de Emergencia -->
    <div>
        <label for="emergency_phone_number">Número de Teléfono de Emergencia</label>
        <input type="text" name="emergency_phone_number" id="emergency_phone_number" class="form-control" value="{{ old('emergency_phone_number') }}" required maxlength="20">
        @error('emergency_phone_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Edad -->
    <div>
        <label for="age">Edad</label>
        <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" required min="0" max="120">
        @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Fecha de Nacimiento -->
    <div>
        <label for="birthday">Fecha de Nacimiento</label>
        <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday') }}" required>
        @error('birthday')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Botón de envío -->
    <div>
        <button type="submit" class="btn btn-primary">Guardar Paciente</button>
    </div>
</form>
