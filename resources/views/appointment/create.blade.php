<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('appointment.store') }}"
              class="bg-indigo-100 rounded-lg p-5 flex flex-col items-center" method="POST">
            @csrf
            @method('POST')
            <!-- Nombre -->
            <div>
                <label for="name">Paciente</label>
                <input type="text" name="patient_id" id="patient_id" class="form-control"
                       required
                       maxlength="255">
                @error('patient_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="name">Doctor</label>
                <input type="text" name="doctor_id" id="doctor_id" class="form-control"
                       required
                       maxlength="255">
                @error('doctor_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="date">Fecha de cita</label>
                <input type="date" name="date" id="date" class="form-control"
                       required>
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="reason">Razón</label>
                <input type="text" name="reason" id="reason" class="form-control">
                @error('reason')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botón de envío -->
            <div>
                <button type="submit" class="btn btn-primary">Guardar cita</button>
            </div>
        </form>
    </div>

</x-layout.main>
