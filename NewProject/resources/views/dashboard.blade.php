{{-- dashboard.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Bienvenue sur votre tableau de bord !
                    </div>

                    <div class="mt-6 text-gray-500">
                        Veuillez choisir une des options suivantes :
                    </div>
                </div>

                {{-- Afficher des informations de débogage sur l'utilisateur --}}

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    {{-- Accès pour l'administrateur --}}
                    @if(auth()->user()->userType->USER_TYPE === 'admin')
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Administration</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                <a href="{{ route('languages.index') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Gérer les langues</a><br>
                                <a href="{{ route('services.index') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Gérer les services</a><br>
                                <a href="{{ route('school_levels.index') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Gérer les niveaux scolaires</a><br>
                                <a href="{{ route('users.index') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Gérer les utilisateurs</a><br>
                                {{-- Ajoutez plus de liens d'administration ici --}}
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Accès pour l'étudiant --}}
                    @if(auth()->user()->userType->USER_TYPE === 'etudiant')
                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Espace Étudiant</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Votre espace personnel pour suivre vos cours, etc.
                                {{-- Ajoutez des liens spécifiques pour les étudiants ici --}}
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Ajoutez plus de sections ici pour d'autres rôles comme "tuteur" et "gestionnaire" selon vos besoins --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
