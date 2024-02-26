{{-- resources/views/students/show.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Détails de l'étudiant
                    </div>

                    <div class="mt-4">
                        <strong>N passaport:</strong> {{ $student->passport_number }}
                    </div>
                    <div class="mt-4">
                        <strong>Nom:</strong> {{ $student->FIRST_NAME_STUDENT }} {{ $student->LAST_NAME_STUDENT }}
                    </div>
                    <div class="mt-4">
                        <strong>Prenom:</strong> {{ $student->LAST_NAME_STUDENT }}
                    </div>
                    
                    <div class="mt-4">
                        <strong>Date de naissance:</strong> {{ $student->DATE_OF_BIRTH }}
                    </div>
                    <div class="mt-4">
                        <strong>Adresse:</strong> {{ $student->ADDRESS_STUDENT }}
                    </div>
                    <div class="mt-4">
                        <strong>Email:</strong> {{ $student->email_student }}
                    </div>
                    <div class="mt-4">
                        <strong>Téléphone:</strong> {{ $student->PHONE_STUDENT }}
                    </div>
                    <div class="mt-4">
                        <strong>Niveau scolaire:</strong> {{ $student->schoolLevel->SCHOOL_LEVEL ?? 'Non défini' }}
                    </div>
                    <div class="mt-4">
                        <strong>Formation précédente:</strong> {{ $student->LAST_TRAINNING }}
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('students.index') }}" class="btn btn-primary">Retour à la liste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
