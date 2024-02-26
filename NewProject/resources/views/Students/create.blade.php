{{-- resources/views/students/create.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl flex justify-between items-center">
                        Ajouter un nouvel étudiant
                        <a href="{{ route('students.index') }}" class="btn btn-info">Retour à la liste</a>
                    </div>

                    <form method="POST" action="{{ route('students.store') }}" class="mt-8">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Prénom --}}
                            <div>
                                <label for="first_name_student" class="block text-sm font-medium text-gray-700">Prénom</label>
                                <input type="text" name="FIRST_NAME_STUDENT" id="first_name_student" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            {{-- Nom --}}
                            <div>
                                <label for="last_name_student" class="block text-sm font-medium text-gray-700">Nom</label>
                                <input type="text" name="LAST_NAME_STUDENT" id="last_name_student" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            {{-- Passport --}}
                            <div>
                                <label for="passport_number" class="block text-sm font-medium text-gray-700">Passport</label>
                                <input type="text" name="passport_number" id="passport_number" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            {{-- Date de Naissance --}}
                            <div>
                                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                                <input type="date" name="DATE_OF_BIRTH" id="date_of_birth" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            {{-- Adresse --}}
                            <div class="col-span-2">
                                <label for="address_student" class="block text-sm font-medium text-gray-700">Adresse</label>
                                <textarea name="ADDRESS_STUDENT" id="address_student" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email_student" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="text" name="email_student" id="email_student" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            {{-- Téléphone --}}
                            <div>
                                <label for="phone_student" class="block text-sm font-medium text-gray-700">Téléphone</label>
                                <input type="text" name="PHONE_STUDENT" id="phone_student" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            {{-- Niveau Scolaire --}}
                            <div>
                                <label for="id_school_level" class="block text-sm font-medium text-gray-700">Niveau Scolaire</label>
                                <select name="ID_SCHOOL_LEVEL" id="id_school_level" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="">Sélectionnez un niveau</option>
                                    @foreach($schoolLevels as $level)
                                        <option value="{{ $level->id }}">{{ $level->SCHOOL_LEVEL }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Formation Précédente --}}
                            <div>
                                <label for="last_training" class="block text-sm font-medium text-gray-700">Formation précédente</label>
                                <input type="text" name="LAST_TRAINNING" id="last_training" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="py-3 text-right">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
