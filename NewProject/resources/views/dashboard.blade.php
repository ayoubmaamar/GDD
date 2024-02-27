<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-semibold">Tableau de bord !</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                    {{-- Paramétrage --}}
                    <div class="rounded-lg shadow-lg p-6 bg-blue-100 hover:bg-blue-200 cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Paramétrage</h3>
                        <div class="text-gray-600">
                            <ul class="list-disc ml-4">
                                <li><a href="{{ route('languages.index') }}" class="underline hover:text-blue-600">Gérer les langues</a></li>
                                <li><a href="{{ route('school_levels.index') }}" class="underline hover:text-blue-600">Gérer les niveaux scolaires</a></li>
                                <!-- Ajouter d'autres options de paramétrage ici -->
                            </ul>
                        </div>
                        <i class="fas fa-cog fa-2x text-gray-700 absolute top-6 right-6"></i>
                    </div>

                    {{-- Gestion des services --}}
                    <div class="rounded-lg shadow-lg p-6 bg-green-100 hover:bg-green-200 cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Gestion des services</h3>
                        <div class="text-gray-600">
                            <ul class="list-disc ml-4">
                                <li><a href="{{ route('services.index') }}" class="underline hover:text-green-600">Voir les services</a></li>
                                <li><a href="{{ route('service_packs.index') }}" class="underline hover:text-green-600">Voir les packs de services</a></li>
                                <!-- Ajouter d'autres options de gestion des services ici -->
                            </ul>
                        </div>
                        <i class="fas fa-tools fa-2x text-gray-700 absolute top-6 right-6"></i>
                    </div>

                    {{-- Gestion des utilisateurs --}}
                    <div class="rounded-lg shadow-lg p-6 bg-purple-100 hover:bg-purple-200 cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Gestion des utilisateurs</h3>
                        <div class="text-gray-600">
                            <ul class="list-disc ml-4">
                                <li><a href="{{ route('students.index') }}" class="underline hover:text-purple-600">Gérer les étudiants</a></li>
                                <li><a href="{{ route('users.index') }}" class="underline hover:text-purple-600">Gérer les utilisateurs</a></li>
                                <!-- Ajouter d'autres options de gestion des utilisateurs ici -->
                            </ul>
                        </div>
                        <i class="fas fa-users fa-2x text-gray-700 absolute top-6 right-6"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
