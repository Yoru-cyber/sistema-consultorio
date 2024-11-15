<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('appointment.store') }}"
            class="flex flex-col items-center space-y-2.5 bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg p-5"
            method="POST">
            @csrf
            @method('POST')
            <div class="flex flex-row space-x-2">
                <div class="w-full">
                    <label for="patient_id">
                        <select name="patient_id" id="patient_id" class="select select-bordered w-full max-w-xs"
                            required>
                            <option disabled selected>Paciente</option>
                            @foreach($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->name}}</option>
                            @endforeach
                        </select>
                        @error('doctor_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                    @error('patient_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="doctor_id">
                        <select name="doctor_id" id="doctor_id" class="select select-bordered w-full max-w-xs" required>
                            <option disabled selected>Doctor</option>
                            @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                            @endforeach
                        </select>
                        @error('doctor_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                </div>

            </div>

            <!-- Fecha de Cita -->
            <div>
                <span>
                    <label for="date" class="input input-bordered flex items-center gap-2">
                        <input type="date" name="date" id="date" class="grow" value="{{ old('date') }}" required>
                    </label>
                    @error('birthday')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </span>
            </div>
            <!-- Razón -->
            <div class="flex flex-col items-center w-full">
                <label for="reason" class="inline-flex">Razón<x-heroicon-s-pencil class="w-5" /></label>
                <textarea type="text" name="reason" id="reason"
                    class="w-full h-36 rounded-lg border-2 border-solid border-zinc-400 shadow-2xl" required></textarea>

                @error('reason')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botón de envío -->
            <div>
                <button type="submit" class="btn btn-primary">Guardar Cita</button>
            </div>
        </form>
    </div>

</x-layout.main>