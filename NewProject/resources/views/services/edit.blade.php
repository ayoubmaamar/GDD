<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Modifier le service
                    </div>
                    <form method="POST" action="{{ route('services.update', $service->id) }}" class="mt-6">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="SERVICE" class="block text-gray-700 text-sm font-bold mb-2">Nom du service :</label>
                            <input type="text" name="SERVICE" id="SERVICE" value="{{ $service->SERVICE }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="DESCRIPTION" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
                            <textarea name="DESCRIPTION" id="DESCRIPTION" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $service->DESCRIPTION }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="PRICE" class="block text-gray-700 text-sm font-bold mb-2">Prix :</label>
                            <input type="number" name="PRICE" id="PRICE" value="{{ $service->PRICE }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
