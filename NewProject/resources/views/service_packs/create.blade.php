<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Ajouter un nouveau pack de services</h2>
        <form method="POST" action="{{ route('service_packs.store') }}">
            @csrf
            <div class="mb-4">
                <label for="SERVICE_PACK" class="block text-sm font-medium text-gray-700">Nom du pack :</label>
                <input type="text" name="SERVICE_PACK" id="SERVICE_PACK" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="DESCRIPTION" class="block text-sm font-medium text-gray-700">Description :</label>
                <textarea name="DESCRIPTION" id="DESCRIPTION" rows="4" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label for="PRICE" class="block text-sm font-medium text-gray-700">Prix :</label>
                <input type="number" name="PRICE" id="PRICE" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Ajouter le pack
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
