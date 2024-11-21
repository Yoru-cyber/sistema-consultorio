<x-layout.main>
    <div class="w-screen h-screen flex flex-col items-center mt-10">
        <div
            class="overflow-x-auto bg-white border-solid border-2 lg:w-fit w-screen border-zinc-200 shadow-2xl text-zinc-700 rounded-lg">
            <table class="table">
                <thead class="text-center">
                    <tr class="space-x-3">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="w-full lg:w-fit text-center">
                    @foreach ($conditions as $condition)
                        <tr>
                            <th>{{ $condition->id }}</th>
                            <td>{{ $condition->name }}</td>
                            <td class="inline-flex justify-center space-x-1.5">
                                <a href="{{ route('condition.show', $condition) }}" class="btn btn-outline btn-info">
                                    <x-heroicon-o-eye class="w-6 h-6" />
                                </a>
                                <a href="{{ route('condition.edit', $condition) }}" class="btn btn-outline btn-warning">
                                    <x-heroicon-o-pencil-square class="w-6 h-6" />
                                </a>

                                <!-- Delete button (with confirmation) -->
                                <form action="{{ route('condition.destroy', $condition) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline btn-error"
                                        onclick="return confirm('¿Está seguro de eliminar este condition?')">
                                        <x-heroicon-o-trash class="w-6 h-6" />
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('condition.create') }}"
            class="btn btn-outline btn-success fixed w-fit bottom-0 right-0 mb-10 sm:mb-5 m-2 p-2">Nueva condición
            <x-healthicons-o-virus-alt class="w-6 h-6" />
        </a>
        {{$conditions->links()}}
    </div>
</x-layout.main>