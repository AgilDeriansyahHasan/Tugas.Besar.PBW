<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap:')" class="text-white" />
            <x-text-input id="name" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-white" />
        </div>

        <!-- NPM -->
        <div class="mt-4">
            <x-input-label for="npm" :value="__('NPM:')" class="text-white" />
            <x-text-input id="npm" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400" 
                          type="text" 
                          name="npm" 
                          :value="old('npm')" 
                          required />
            <x-input-error :messages="$errors->get('npm')" class="mt-2 text-white" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email:')" class="text-white" />
            <x-text-input id="email" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-white" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password:')" class="text-white" />
            <x-text-input id="password" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400" 
                          type="password" 
                          name="password" 
                          required />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-white" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password:')" class="text-white" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400" 
                          type="password" 
                          name="password_confirmation" 
                          required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-white" />
        </div>
        
        <!-- Links and Register Button -->
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('login') }}" class="text-sm text-white hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
