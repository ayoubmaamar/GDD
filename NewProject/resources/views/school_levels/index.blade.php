{{-- resources/views/school_levels/index.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl flex justify-between items-center">
                        <div>Niveaux Scolaires</div>
                        <a href="{{ route('school_levels.create') }}" class="btn btn-primary">Ajouter un niveau scolaire</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white">
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Niveau Scolaire</th>
                                <th class="px-4 py-2 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($levels as $level)
                                <tr>
                                    <td class="border px-4 py-2">{{ $level->SCHOOL_LEVEL }}</td>
                                    <td class="border px-4 py-2 text-right">
                                        <a href="{{ route('school_levels.edit', $level->ID_SCHOOL_LEVEL) }}" class="btn btn-sm btn-info">Modifier</a>
                                        <form action="{{ route('school_levels.destroy', $level->ID_SCHOOL_LEVEL) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce niveau scolaire ?');">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
