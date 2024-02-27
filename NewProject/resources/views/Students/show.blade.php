<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-semibold mb-4">Détails de l'étudiant</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>N passaport:</strong>
                            <p>{{ $student->passport_number }}</p>
                        </div>
                        <div>
                            <strong>Nom:</strong>
                            <p>{{ $student->LAST_NAME_STUDENT }}</p>
                        </div>
                        <div>
                            <strong>Prénom:</strong>
                            <p>{{ $student->FIRST_NAME_STUDENT }}</p>
                        </div>
                        <div>
                            <strong>Date de naissance:</strong>
                            <p>{{ $student->DATE_OF_BIRTH }}</p>
                        </div>
                        <div>
                            <strong>Adresse:</strong>
                            <p>{{ $student->ADDRESS_STUDENT }}</p>
                        </div>
                        <div>
                            <strong>Email:</strong>
                            <p>{{ $student->email_student }}</p>
                        </div>
                        <div>
                            <strong>Téléphone:</strong>
                            <p>{{ $student->PHONE_STUDENT }}</p>
                        </div>
                        <div>
                            <strong>Niveau scolaire:</strong>
                            <p>{{ $student->schoolLevel->SCHOOL_LEVEL ?? 'Non défini' }}</p>
                        </div>
                        <div>
                            <strong>Formation précédente:</strong>
                            <p>{{ $student->LAST_TRAINNING }}</p>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-between">
                        <a href="{{ route('students.documents', $student->ID_STUDENT) }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Voir les documents</a>
                        <a href="{{ route('students.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Retour à la liste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
