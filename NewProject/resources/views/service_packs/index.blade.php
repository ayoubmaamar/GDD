{{-- resources/views/service_packs/index.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl flex justify-between items-center">
                        Packs de Services
                        <a href="{{ route('service_packs.create') }}" class="btn btn-primary">Ajouter un pack de services</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white">
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Pack</th>
                                <th class="px-4 py-2 text-left">Description</th>
                                <th class="px-4 py-2 text-left">Prix</th>
                                <th class="px-4 py-2 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicePacks as $pack)
                                <tr>
                                    <td class="border px-4 py-2">{{ $pack->SERVICE_PACK }}</td>
                                    <td class="border px-4 py-2">{{ $pack->DESCRIPTION }}</td>
                                    <td class="border px-4 py-2">{{ $pack->PRICE }}</td>
                                    <td class="border px-4 py-2 text-right">
                                        <a href="{{ route('service_packs.edit', $pack->ID_SERVICE_PACK) }}" class="btn btn-info">Modifier</a>
                                        <form action="{{ route('service_packs.destroy', $pack->ID_SERVICE_PACK) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pack de services ?');">Supprimer</button>
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
