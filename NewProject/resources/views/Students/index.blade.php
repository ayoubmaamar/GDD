{{-- resources/views/students/index.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Liste des étudiants
                    </div>
                    {{-- Bouton Ajouter étudiant --}}
                    <div class="mt-4">
                        <a href="{{ route('students.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus mr-2"></i>Ajouter étudiant
                        </a>
                    </div>
                </div>

                

                <div class="p-6 sm:px-20 bg-white">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Identité</th>
                                <th class="px-4 py-2">Nom complet</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Tel</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>                                    
                                    <td class="border px-4 py-2">{{ $student->passport_number }}</td>                                    
                                    <td class="border px-4 py-2">{{ $student->FIRST_NAME_STUDENT }} {{ $student->LAST_NAME_STUDENT }}</td>
                                    <td class="border px-4 py-2">{{ $student->email_student }}</td>
                                    <td class="border px-4 py-2">{{ $student->PHONE_STUDENT }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('students.show', $student->ID_STUDENT) }}" class="btn btn-sm btn-info">Détails</a>
                                    </td>
                                    <td>
                                        <!-- Bouton Edit -->
                                        <a href="{{ route('students.edit', $student->ID_STUDENT) }}" class="btn btn-sm btn-info">Edit</a>
                                        <!-- Vous pouvez ajouter d'autres boutons d'action ici si nécessaire -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
