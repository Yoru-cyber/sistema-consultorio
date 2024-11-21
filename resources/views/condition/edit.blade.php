<x-layout.main>
    <div class="flex flex-col w-screen h-screen items-center">
        <form action="{{ route('condition.update', $condition) }}"
            class="flex flex-col items-center space-y-2.5 bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg p-5"
            method="POST">
            @csrf
            @method('PUT')
            <!-- Nombre -->
            <span>
                <label for="name" class="input input-bordered flex items-center gap-2">
                    <x-healthicons-o-virus-alt class="w-5" />
                    <input type="text" name="name" id="name" class="grow" value="{{old('name', $condition->name)}}"
                        placeholder="Condición" required maxlength="255">
                </label>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </span>
            <!-- Botón de envío -->
            <span>
                <button type="submit" class="btn btn-primary">Guardar Condición</button>
            </span>
        </form>
    </div>

</x-layout.main>