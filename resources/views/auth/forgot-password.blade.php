<link rel="icon" type="image/png" href="{{ asset('vendor/adminlte/dist/img/logo.png') }}">
<x-guest-layout>
    <div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <div class="mb-4 text-sm text-gray-700 text-center font-semibold">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Déjanos tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.') }}
        </div>

        <!-- Mensaje de estado de la sesión -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <!-- Dirección de correo electrónico -->
            <div>
                <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700 font-medium" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
            </div>

            <!-- Botón de envío -->
            <div class="flex items-center justify-center mt-6">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-lg shadow-md transition duration-200">
                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
