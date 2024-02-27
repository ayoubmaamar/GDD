<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-md mx-auto">
            <h1 class="text-2xl font-semibold mb-6">Ajouter une nouvelle langue</h1>
            <form method="POST" action="{{ route('languages.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label for="LANGUAGE" class="block text-gray-700 text-sm font-bold mb-2">Nom de la langue :</label>
                    <input type="text" id="LANGUAGE" name="LANGUAGE" value="" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Ajouter
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
