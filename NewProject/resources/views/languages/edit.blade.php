<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-lg mx-auto">
            <h1 class="text-2xl font-semibold mb-6">Modifier la langue</h1>
            <form method="POST" action="{{ route('languages.update', ['language' => $language->ID_LANGUAGE]) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="LANGUAGE" class="block text-gray-700 text-sm font-bold mb-2">Nom de la langue :</label>
                    <input type="text" name="LANGUAGE" value="{{ $language->LANGUAGE }}" id="LANGUAGE" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Mettre à jour
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
