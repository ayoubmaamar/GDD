<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="ID_STUDENT" value="{{ $studentId }}">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="TITLE_DOCUMENT" class="block font-medium text-sm text-gray-700">Titre du document</label>
                        <input type="text" name="TITLE_DOCUMENT" id="TITLE_DOCUMENT" required class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                        
                        <label for="PATH_FILE" class="block font-medium text-sm text-gray-700 mt-4">Fichier du document</label>
                        <input type="file" name="PATH_FILE" id="PATH_FILE" required class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Soumettre
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
