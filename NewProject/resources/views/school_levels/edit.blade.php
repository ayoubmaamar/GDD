{{-- resources/views/school_levels/edit.blade.php --}}
<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Modifier le niveau scolaire</h2>
        <form method="POST" action="{{ route('school_levels.update', $school_level->ID_SCHOOL_LEVEL) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="SCHOOL_LEVEL" class="block text-gray-700 text-sm font-bold mb-2">Niveau Scolaire :</label>
                <input type="text" name="SCHOOL_LEVEL" id="SCHOOL_LEVEL" value="{{ $school_level->SCHOOL_LEVEL }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</x-app-layout>
