{{-- resources/views/languages/index.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Gestion des langues
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('languages.create') }}" class="btn btn-primary">Ajouter une langue</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Langue</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($languages as $language)
                                <tr>
                                    <td class="border px-4 py-2">{{ $language->LANGUAGE }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('languages.edit', ['language' => $language->ID_LANGUAGE]) }}" class="btn btn-sm btn-info">Modifier</a>
                                        <form action="{{ route('languages.destroy', ['language' => $language->ID_LANGUAGE]) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette langue ?');">Supprimer</button>
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
