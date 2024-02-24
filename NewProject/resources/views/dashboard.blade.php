<x-app-layout>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Students -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                    <a href="{{ route('students.index') }}" class="flex flex-col items-center justify-center">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M6 20h5v-2a3 3 0 00-5.356-1.857M16 6a3 3 0 11-6 0 3 3 0 016 0zM6 9a3 3 0 00-3 3v2a3 3 0 006 0v-2a3 3 0 00-3-3z" />
                        </svg>
                        <h2 class="mt-4 font-semibold text-xl text-gray-800 leading-tight">Étudiants</h2>
                        <p class="text-gray-500">Gérer les étudiants</p>
                    </a>
                </div>

                <!-- Languages -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                    <a href="{{ route('languages.index') }}" class="flex flex-col items-center justify-center">
                        <!-- Heroicon name: globe-alt -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22c5.131 0 9.445-3.389 10.95-8H1.05c1.505 4.611 5.819 8 10.95 8zM2.343 10h19.314C20.555 5.67 16.63 2 12 2S3.445 5.67 2.343 10zM12 22v-2m0-4v-2m0-4V8m0-6v2m-6 6H2m16 0h2M6 6l-2 2m12-2l2 2m-2 12l2-2m-12 2l-2-2" />
                        </svg>
                        <h2 class="mt-4 font-semibold text-xl text-gray-800 leading-tight">Langues</h2>
                        <p class="text-gray-500">Gérer les langues</p>
                    </a>
                </div>

                <!-- Services -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                    <a href="{{ route('services.index') }}" class="flex flex-col items-center justify-center">
                        <!-- Heroicon name: cog -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M11.3 1.046a1 1 0 00-2.6 0l-.289.5a1.993 1.993 0 01-1.272.854l-.562.09a1.993 1.993 0 01-2.03-.991L3.6 1.062a1 1 0 00-1.2 0l-.928.537a1.993 1.993 0 01-2.03.991l-.561-.09a1.993 1.993 0 01-1.273-.854l-.289-.5a1 1 0 00-1.2 0l-.289.5a1.993 1.993 0 01-1.272.854l-.562.09a1 1 0 000 1.908l.562.09a1.993 1.993 0 011.272.854l.289.5a1 1 0 001.2 0l.928-.537a1.993 1.993 0 012.03-.991l.562.09a1.993 1.993 0 011.272.854l.289.5a1 1 0 001.2 0l.289-.5a1.993 1.993 0 011.272-.854l.562-.09a1.993 1.993 0 012.03.991l.928.537a1 1 0 001.2 0l.289-.5a1.993 1.993 0 011.272-.854l.562-.09a1 1 0 000-1.908l-.562-.09a1.993 1.993 0 01-1.272-.854l-.289-.5zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <h2 class="mt-4 font-semibold text-xl text-gray-800 leading-tight">Services</h2>
                        <p class="text-gray-500">Gérer les services</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
