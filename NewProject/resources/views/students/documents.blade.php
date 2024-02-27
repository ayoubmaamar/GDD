<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold">
                            Documents de l'étudiant: {{ $student->FIRST_NAME_STUDENT }} {{ $student->LAST_NAME_STUDENT }}
                        </h2>
                        <a href="{{ route('documents.create', ['id' => $student->ID_STUDENT]) }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">Ajouter un document</a>
                    </div>

                    @if($documents->isEmpty())
                        <p class="mt-4 text-gray-600">Aucun document disponible.</p>
                    @else
                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($documents as $document)
                                <div class="rounded-lg shadow-lg p-4 bg-white">
                                    <strong>{{ $document->TITLE_DOCUMENT }}:</strong>
                                    <a href="{{ asset($document->PATH_FILE) }}" target="_blank" class="text-blue-500 hover:text-blue-700">Voir le document</a>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="mt-6">
                        <a href="{{ route('students.show', $student->ID_STUDENT) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Retour aux détails de l'étudiant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
