<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Gestion des services
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('services.create') }}" class="btn btn-primary">Ajouter un service</a>
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
                                <th class="px-4 py-2">Service</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Prix</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td class="border px-4 py-2">{{ $service->SERVICE }}</td>
                                    <td class="border px-4 py-2">{{ $service->DESCRIPTION }}</td>
                                    <td class="border px-4 py-2">{{ $service->PRICE }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('services.edit', $service->ID_SERVICE) }}" class="btn btn-sm btn-info">Modifier</a>
                                        <form action="{{ route('services.destroy', $service->ID_SERVICE) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?');">Supprimer</button>
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
