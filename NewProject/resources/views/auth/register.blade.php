<x-guest-layout>
    <form method="POST" action="{{ route('register') }}"> <!-- Assurez-vous que la route est correctement définie dans web.php -->
        @csrf

        <!-- ID Google (Optionnel) -->
        <div>
            <x-input-label for="id_google" :value="__('ID Google (Optional)')" />
            <x-text-input id="id_google" class="block mt-1 w-full" type="text" name="id_google" :value="old('id_google')" autofocus autocomplete="id_google" />
            <x-input-error :messages="$errors->get('id_google')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email_user" :value="__('Email')" />
            <x-text-input id="email_user" class="block mt-1 w-full" type="email" name="email_user" :value="old('email_user')" required autocomplete="email_user" />
            <x-input-error :messages="$errors->get('email_user')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password_user" :value="__('Password')" />
            <x-text-input id="password_user" class="block mt-1 w-full" type="password" name="password_user" required autocomplete="new-password_user" />
            <x-input-error :messages="$errors->get('password_user')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
