{{-- resources/views/service_packs/create.blade.php --}}
<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Ajouter un nouveau pack de services</h2>
        <form method="POST" action="{{ route('service_packs.store') }}">
            @csrf
            <div class="mb-4">
                <label for="SERVICE_PACK" class="block text-gray-700 text-sm font-bold mb-2">Nom du pack :</label>
                <input type="text" name="SERVICE_PACK" id="SERVICE_PACK" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="DESCRIPTION" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
                <textarea name="DESCRIPTION" id="DESCRIPTION" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <div class="mb-4">
                <label for="PRICE" class="block text-gray-700 text-sm font-bold mb-2">Prix :</label>
                <input type="text" name="PRICE" id="PRICE" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter le pack</button>
        </form>
    </div>
</x-app-layout>
