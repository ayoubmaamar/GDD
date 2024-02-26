{{-- resources/views/school_levels/create.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Ajouter un nouveau niveau scolaire
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white">
                    <form method="POST" action="{{ route('school_levels.store') }}" class="mt-6">
                        @csrf
                        <div class="mb-4">
                            <label for="SCHOOL_LEVEL" class="block text-gray-700 text-sm font-bold mb-2">Niveau Scolaire :</label>
                            <input type="text" name="SCHOOL_LEVEL" id="SCHOOL_LEVEL" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
