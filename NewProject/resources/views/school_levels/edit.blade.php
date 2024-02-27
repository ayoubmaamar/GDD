<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-2xl font-bold mb-6">Modifier le niveau scolaire</h2>
            <form method="POST" action="{{ route('school_levels.update', $school_level->ID_SCHOOL_LEVEL) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="SCHOOL_LEVEL" class="block text-gray-700 text-sm font-bold mb-2">Niveau Scolaire :</label>
                    <input type="text" name="SCHOOL_LEVEL" id="SCHOOL_LEVEL" value="{{ $school_level->SCHOOL_LEVEL }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Mettre à jour
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
