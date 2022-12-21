<x-guest-layout>
    <x-jet-authentication-card>
        <img src="/img/logo.png" alt="" style="width: 400px">
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>
        <hr><br>
        <CENTER>
            <x-jet-label for="" class="text-gray-600" value="{{ __('Iniciar sesión') }}" style="font-size: 140%"/>
        </CENTER>
        <br>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('CURP') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="curp" :value="old('curp')" required autofocus  />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}
            <br>
            <CENTER>
                <div>
                    {!! NoCaptcha::renderJs('es', false, 'onloadCallback') !!}
                    {!! NoCaptcha::display() !!}
                </div>
            </CENTER>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Register') }}</a>
                @endif
                
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script>
    var onloadCallback = function(){
        alert("grecaptcha is ready");
    }
</script>