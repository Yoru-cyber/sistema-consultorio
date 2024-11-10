<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('appointment.update', $appointment) }}"
              class="bg-indigo-100 rounded-lg p-5 flex flex-col items-center" method="POST">
            @csrf
            @method('PUT')
            <!-- Nombre -->
            <div>
                <label for="name">Paciente</label>
                <input type="text" name="patient_id" id="patient_id" class="form-control"
                       value="{{  old('name', $appointment->patient->name) }}"
                       required
                       maxlength="255">
                @error('patient_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="name">Doctor</label>
                <input type="text" name="doctor_id" id="doctor_id" class="form-control"
                       value="{{  old('name', $appointment->doctor->name) }}"
                       required
                       maxlength="255">
                @error('doctor_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="date">Fecha de cita</label>
                <input type="date" name="date" id="date" class="form-control"
                       value="{{ old('date', $appointment->date) }}"
                       required>
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="prescription">Razón</label>
                <input type="text" name="reason" id="reason" class="form-control"
                       value="{{  old('prescription', $appointment->reason) }}">
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
