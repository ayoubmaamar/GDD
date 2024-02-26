{{-- resources/views/languages/create.blade.php --}}
<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-xl font-bold mb-4">Ajouter une nouvelle langue</h1>
        <form method="POST" action="{{ route('languages.store') }}">
            @csrf
            <div class="mb-4">
                <label for="LANGUAGE" class="block text-gray-700 text-sm font-bold mb-2">Nom de la langue :</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="LANGUAGE" name="LANGUAGE" value="" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
        </form>
    </div>
</x-app-layout>
