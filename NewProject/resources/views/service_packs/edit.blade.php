{{-- resources/views/service_packs/edit.blade.php --}}
<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Modifier le pack de services</h2>
        <form method="POST" action="{{ route('service_packs.update', $servicePack->ID_SERVICE_PACK) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="SERVICE_PACK" class="block text-gray-700 text-sm font-bold mb-2">Nom du pack :</label>
                <input type="text" name="SERVICE_PACK" id="SERVICE_PACK" value="{{ $servicePack->SERVICE_PACK }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="DESCRIPTION" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
                <textarea name="DESCRIPTION" id="DESCRIPTION" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $servicePack->DESCRIPTION }}</textarea>
            </div>
            <div class="mb-4">
                <label for="PRICE" class="block text-gray-700 text-sm font-bold mb-2">Prix :</label>
                <input type="text" name="PRICE" id="PRICE" value="{{ $servicePack->PRICE }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</x-app-layout>
